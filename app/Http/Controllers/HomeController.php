<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\Testimonials;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home()
    {
        $testimonials = Testimonials::all();
        return view('welcome',compact('testimonials'));
    }
    public function index()
    {
        $this->middleware('auth');
        $users = User::all();
        return view('admin.dashboard',compact('users'));
    }
    public function ContactPage()
    {
        return view('pages.contact-us');
    }
}
