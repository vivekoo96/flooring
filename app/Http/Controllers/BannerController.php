<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('banner.index',compact('banners'));
    }

    public function create(){
        return view('banner.create');
    }

    public function store(Request $request){

        $request->validate([
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->short_desc = $request->short_desc;
        if ($request->hasFile('main_image')) {
        $mainImage = $request->file('main_image');
        $mainImageName = time().'_'.$mainImage->getClientOriginalName();
        $mainImage->move(public_path('images'), $mainImageName);
        $banner->banner = $mainImageName;
        }
        $banner->save();
        return back()->with('success','Banner added successfully');
    }

    public function delete($id){
        Banner::find($id)->delete();
        return back()->with('success','Banner deleted successfully');
    }

}
