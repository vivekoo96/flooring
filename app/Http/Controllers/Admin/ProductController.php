<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function create(Request $request){
         $brands = Brand::with('categories')->get();
        return view('product.create',compact('brands'));
    }

    public function store(Request $request){
            $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'brand_id' => 'required|integer',
        'category_id' => 'required|integer',
        'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image_name.*' => 'string|max:255',
        'image_file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
         return redirect()->back()
                         ->withErrors($validator);

    }

    // Create a new project
    $product = new Product();
    $product->name = $request->input('name');
    $product->brand_id = $request->input('brand_id');
    $product->spacfication = $request->input('spacfication');
    $product->category_id = $request->input('category_id');

    // Handle main image file upload
    if ($request->hasFile('main_image')) {
          $mainImage = $request->file('main_image');
        $mainImageName = time().'_'.$mainImage->getClientOriginalName();
        $mainImage->move(public_path('images'), $mainImageName);
        $product->main_image = $mainImageName;
    }

    $product->save();

    // Handle the dynamically added image fields
    if ($request->has('image_name')) {
        foreach ($request->image_name as $key => $value) {
            $productItem = new ProductItem();
            $productItem->product_id = $product->id;
            $productItem->image_name = $value;
            // Handle image file upload
            if (isset($request->image_file[$key])) {
                $file = $request->image_file[$key];
                  $imageName = time().'_'.$file->getClientOriginalName();
                    $file->move(public_path('images'), $imageName);
                    $productItem->image_file = $imageName;
            }
            $productItem->save();
        }
    }
    return back()->with('success','product added successfully');
    }

    public function gallery(Request $request,$id){
        $id = $id;
        $productItems = ProductItem::where('product_id',$request->id)->get();
        return view('product.gallery',compact('productItems','id'));
    }


    public function galleryDelete($id){
       $productItem = ProductItem::find($id)->delete();
       return back()->with('success','Product Item deleted successfully');
    }

    public function itemAdd(Request $request){
        $request->validate([
            'image_name' => 'required|string|max:255',
            'image_file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $productItem = new ProductItem();
            $productItem->product_id = $request->id;
            $productItem->image_name = $request->image_name;
            if ($request->image_file) {
                $file = $request->image_file;
                $imageName = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $productItem->image_file = $imageName;
            }
            $productItem->save();
            return back()->with('success','Product Item Add Successfully');
    }

    public function edit(Request $request,$id){
        $product = Product::find($id);
        $brands = Brand::all();
        return view('product.edit',compact('product','brands'));
    }

    public function update(Request $request){
        $request->validate([
        'name' => 'required|string|max:255',
        'brand_id' => 'required|integer',
        'category_id' => 'required|integer',
        ]);

    $product = Product::find($request->id);
    $product->name = $request->input('name');
    $product->brand_id = $request->input('brand_id');
    $product->spacfication = $request->input('spacfication');
    $product->category_id = $request->input('category_id');
    if ($request->hasFile('main_image')) {
          $mainImage = $request->file('main_image');
        $mainImageName = time().'_'.$mainImage->getClientOriginalName();
        $mainImage->move(public_path('images'), $mainImageName);
        $product->main_image = $mainImageName;
    }
    $product->save();
    return back()->with('success','Product Updated successfully');
    }
}
