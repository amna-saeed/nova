<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo; // Assuming you have an SEO model

class SeoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $seos = Seo::all(); // Fetch all SEO records
        return view('admin.seo.index', compact('seos'));
    }
    public function create()
    {
        return view('admin.seo.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Seo::create($data);
        return redirect()->route('seo.index')->with('success', 'SEO entry Created successfully.');
    }
    public function edit($id)
    {
        $seo = Seo::findOrFail($id); // Fetch the specific SEO record
        return view('admin.seo.edit', compact('seo'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'keywords' => 'required|string',
        ]);

        $seo = Seo::findOrFail($request->id);
        $seo->update($request->all());
        return redirect()->route('seo.index')->with('success', 'SEO entry updated successfully.');
    }
    public function delete($id)
    {
        $seo = Seo::findOrFail($id); // Find the SEO record by ID
        $seo->delete(); // Delete the SEO record
        return redirect()->route('seo.index')->with('success', 'SEO entry deleted successfully.');
    }
}