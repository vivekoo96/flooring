<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(Request $request){
        $brands = Brand::all();
        return view('brand.index',compact('brands'));
    }
     public function create(Request $request){
        return view('brand.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $brand = new Brand();
        $brand->name = $request->name;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $brand->image = $imageName;
        $brand->slug = Str::slug($request->name);
        $brand->save();
         return back()->with('success', 'You have successfully added Brand.');
    }

    public function edit(Request $request,$id){
        $brand = Brand::find($id);
        return view('brand.edit',compact('brand'));
    }
    public function delete(Request $request,$id){
        $brand = Brand::find($id);
        $brand->delete();
        return back()->with('success', 'You have successfully deleted Brand.');
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required|string',

        ]);
        $brand =  Brand::find($request->id);
        $brand->name = $request->name;
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $brand->image = $imageName;
        }
        $brand->slug = Str::slug($request->name);
        $brand->save();
         return back()->with('success', 'You have successfully updated Brand.');
    }
}
