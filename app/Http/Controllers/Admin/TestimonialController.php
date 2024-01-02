<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        return view('testimonial.index',compact('testimonials'));
    }
    public function create(){
        return view('testimonial.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'content' => 'required'
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->content = $request->content;
        $testimonial->save();
        return back()->with('success','Testimonial added successfully');
    }
    public function edit($id){
        $testimonial =  Testimonial::find($id);
        return view('testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'content' => 'required'
        ]);
        $testimonial = Testimonial::find($request->id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->content = $request->content;
        $testimonial->save();
        return back()->with('success','Testimonial updated successfully');
    }

    public function delete($id){
          $testimonial = Testimonial::find($id)->delete();
          return back()->with('success','Testimonial deleted successfully');

    }
}
