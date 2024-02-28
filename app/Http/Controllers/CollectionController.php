<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    protected $imageService;
    /**
     * Display a category listing of the resource.
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
        $category = Category::orderBy('id', 'DESC')->get();
        view()->share('category', $category);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Collection::orderBy('id', 'DESC')->get();
        return view('admin.collection.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'image' =>  'required',
            'pdf' =>  'required',
        ]);
        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Collection::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->slug = $uniqueSlug;
        $collection->category_id = $request->category;
        // Image store code
        if ($image = $request->file('image')) {
            $collection->image = $this->imageService->compressAndStoreImage($image, $uniqueSlug, 'collection');
            // $destinationPath = 'collection-image/';
            // $profileImage = $uniqueSlug . '.' . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            // $collection->image = $profileImage;
        }
        // Image store code
        if ($pdf = $request->file('pdf')) {
            $pdfPath = 'collection-pdf/';
            $colPdf = $uniqueSlug . '.' . $pdf->getClientOriginalExtension();
            $pdf->move($pdfPath, $colPdf);
            $collection->pdf = $colPdf;
        }
        $collection->save();
        return redirect()->route('admin.collection.index')->with('success', 'Collection created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Collection::where('id', decrypt($id))->first();
        return view('admin.collection.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->post());
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
        ]);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Collection::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $collection = Collection::find($request->edit_id);
        $collection->name = $request->name;
        $collection->slug = $uniqueSlug;
        $collection->category_id = $request->category;

        // Image update code
        if ($image = $request->file('image')) {
            // Unlink the old image
            $oldImage = $collection->image;
            $image_path = public_path('collection-image/' . $oldImage);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            // Add the new image
            $collection->image = $this->imageService->compressAndStoreImage($image, $uniqueSlug, 'collection');
            // $destinationPath = 'collection-image/';
            // $profileImage = $uniqueSlug . '.' . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            // $collection->image = $profileImage;
        }

        // PDF update code
        if ($pdf = $request->file('pdf')) {
            // Unlink the old PDF
            $oldPdf = $collection->pdf;
            $pdf_path = public_path('collection-pdf/' . $oldPdf);
            if (file_exists($pdf_path)) {
                unlink($pdf_path);
            }
            // Add the new PDF
            $pdfPath = 'collection-pdf/';
            $colPdf = $uniqueSlug . '.' . $pdf->getClientOriginalExtension();
            $pdf->move($pdfPath, $colPdf);
            $collection->pdf = $colPdf;
        }

        $collection->save();
        return redirect()->route('admin.collection.index')->with('info', 'Collection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $collection = Collection::where('id', decrypt($id))->first();

        // Unlink the old image
        $oldImage = $collection->image;
        $image_path = public_path('collection-image/' . $oldImage);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $oldPdf = $collection->pdf;
        $pdf_path = public_path('collection-pdf/' . $oldPdf);
        if (file_exists($pdf_path)) {
            unlink($pdf_path);
        }

        $collection->delete();
        return redirect()->route('admin.collection.index')->with('error', 'Collection deleted successfully.');
    }
}
