<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function create(){
        $brands = Brand::all();
        return view('category.create',compact('brands'));
    }
    public function store(Request $request){
         $request->validate([
            'name' => 'required|string',
            'brand_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $category->image = $imageName;
        $category->brand_id = $request->brand_id;
        $category->slug = Str::slug($request->name);
        $category->save();
         return back()->with('success', 'You have successfully added Category.');
    }

    public function delete(Request $request,$id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('success','You have successfully deleted category.');
    }

    public function edit(Request $request,$id){
        $category = Category::find($id);
        $brands = Brand::all();
        return view('category.edit',compact('brands','category'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string',
               'brand_id' => 'required',

        ]);
        $category =  Category::find($request->id);
        $category->name = $request->name;
        $category->brand_id = $request->brand_id;
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $category->image = $imageName;
        }
        $category->slug = Str::slug($request->name);
        $category->save();
         return back()->with('success', 'You have successfully updated category.');
    }

    public function getCategories(Request $request,$brandId){
         $categories = Category::where('brand_id', $brandId)->get();
         return response()->json($categories);
    }
}
