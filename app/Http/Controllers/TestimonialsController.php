<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    public function quotesIndex()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index',compact('testimonials'));
    }
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index',compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Testimonials::create($data);
        return redirect()->route('testimonials.index')->with('message','Testimonial Created Successfully!');
    }
    public function edit($id)
    {
        $testimonials = Testimonials::find($id);
        return view('admin.testimonials.edit',compact('testimonials'));

    }
    public function update(Request $request)
    {
        $testimonials = Testimonials::find($request->id);
        $data = $request->all();

        $testimonials->update($data);
        
        return redirect()->route('testimonials.index')->with('message','Testimonial Edited Successfully!');

    }
    public function delete($id)
    {
        Testimonials::where('id',$id)->delete();
        return redirect()->route('testimonials.index')->with('message','Testimonial Deleted Successfully!');
    }
}