<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCateory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $category = Category::get();
        view()->share('category', $category);

        $collection = Collection::get();
        view()->share('collection', $collection);

        $data = Product::orderBy('id', 'DESC')->paginate(5);
        view()->share('data', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'collection' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'image' => 'required',
        ]);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $product = new Product();
        $product->name = $request->name;
        $product->collection_id = $request->collection;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->slug = $uniqueSlug;

        // Primary product image store
        if ($primaryImage = $request->file('image')) {
            $destinationPath = 'product-image/';
            $profileImage = $uniqueSlug . '.' . $primaryImage->getClientOriginalExtension();
            $primaryImage->move($destinationPath, $profileImage);
            $product->image = $profileImage;
        }

        $product->save();

        // Product slider image or external css
        $productId = $product->id;
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $realImage = $uniqueSlug . "-" . rand(1, 9999) . "-" . date('d-m-Y-h-s') . "." . $image->getClientOriginalExtension();
                $path = $image->move('product-slider-images', $realImage);
                ProductImage::create([
                    'product_id' => $productId,
                    'image' => $realImage,
                ]);
            }
        }


        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::where('id', decrypt($id))->first();
        $productImages = ProductImage::where('product_id', $data->id)->get();
        $subcategory = SubCateory::where('category_id', $data->category_id)->get();
        return view('admin.products.edit', compact('productImages', 'data', 'subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getsubcategory(Request $request)
    {
        $subcategory = SubCateory::where('category_id', $request->category)->get();
        return view('admin.products.subcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'collection' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
        ]);
        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->where('id', '!=', $request->id)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->collection_id = $request->collection;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->slug = $uniqueSlug;
        if ($real_image = $request->file('image')) {
            // Old Image remove
            $product = Product::where('id', $request->id)->first();
            $image_path = public_path('product-image/' . $product->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            // Added new image
            $productRealImage = 'product-image/';
            $realImage = $request->slug . "." . $real_image->getClientOriginalExtension();
            $real_image->move($productRealImage, $realImage);
            $product->image = $realImage;
        }
        $product->save();
        $productId = $product->id;
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $realImage = $request->slug . "-" . rand(1, 9999) . "-" . date('d-m-Y-h-s') . "." . $image->getClientOriginalExtension();
                $path = $image->move('product-slider-images', $realImage);
                ProductImage::create([
                    'product_id' => $productId,
                    'image' => $realImage,
                ]);
            }
        }

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
    }

    /**
     * Remove the external image.
     */
    public function removeImage($id)
    {
        $product = ProductImage::where('id', $id)->first();
        $image_path = public_path('product-slider-images/' . $product->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $product->delete();
        return redirect()->back()->with('warning', 'Product image removed successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::where('id', decrypt($id))->first();
        if ($product) {
            $image_path = public_path('product-image/' . $product->image);
            if (file_exists($image_path)) {
                unlink($image_path);
                $product->delete();
            }
        }
        $productCollectionId = decrypt($id);
        $imagesToDelete = ProductImage::where('product_id', $productCollectionId)->get();
        foreach ($imagesToDelete as $image) {
            $imagePath = public_path('product-slider-images/' . $image->image);
            // Delete the record from the database
            $image->delete();
            // Unlink (delete) the image from storage
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->route('admin.product.index')->with('error', 'Product deleted successfully.');
    }
}
