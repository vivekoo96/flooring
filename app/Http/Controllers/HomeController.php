<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $Regent = Brand::where('name','Regent')->with('products')->get();
        $k3 = Brand::where('name','K3')->with('products')->get();
        return view('home',compact('Regent','k3'));
    }
    public function about(Request $request){
        return view('about');
    }
     public function product(Request $request){
        $Regent = Brand::where('name','Regent')->with('products')->get();
        $k3 = Brand::where('name','K3')->with('products')->get();
        return view('product',compact('Regent','k3'));
    }
    public function contact(Request $request){
        return view('contact');
    }

    public function product_details($id){
        $product = Product::find($id);
        return view('product-details',compact('product'));
    }

    public function product_category_k3(Request $request){
        $k3 = Brand::where('name','K3')->with('products')->get();
        return view('product',compact('k3'));
    }
     public function product_category_regent(Request $request){
        $Regent = Brand::where('name','Regent')->with('products')->get();
        return view('product',compact('Regent'));
    }
}
