<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCateoryController extends Controller
{
    /**
     * Display a category listing of the resource.
     */
    public function __construct()
    {
        $category = Category::orderBy('id','DESC')->get();
        view()->share('category',$category);
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SubCategory::orderBy('id','DESC')->get();
        return view('admin.subcategory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'category'=>'required',
        ]);
        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (SubCategory::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }
        SubCategory::create([
            'name'=>$request->name,
            'slug'=>$uniqueSlug,
            'category_id'=>$request->category
        ]);
        return redirect()->route('admin.subcategory.index')->with('success','subcategory created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($subCateory)
    {
        $data = SubCategory::where('id',decrypt($subCateory))->first();
        return view('admin.subcategory.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCateory)
    {
        $request->validate([
            'name'=>'required|max:255',
            'category'=>'required',
        ]);
        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        
        while (SubCategory::where('slug', $uniqueSlug)->where('id', '!=', $request->id)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        SubCategory::where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => $uniqueSlug,
            'category_id'=>$request->category
        ]);
        return redirect()->route('admin.subcategory.index')->with('info','SubCategory updated successfully.');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SubCategory::where('id',decrypt($id))->delete();
        return redirect()->route('admin.subcategory.index')->with('error','SubCategory deleted successfully.');   
    }
}
