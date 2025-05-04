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
    public function aboutPage()
    {
        return view('pages.about-us');
    }
    public function packagesPage()
    {
        return view('pages.packages');
    }
    public function customerPage()
    {
        return view('pages.customer-center');
    }
    public function carePage()
    {
        return view('pages.customer-care');
    }
    public function internetPage()
    {
        return view('pages.internet');
    }
    public function careerPage()
    {
        return view('pages.career');
    }
    public function privacyPage()
    {
        return view('pages.privacy-policy');
    }
    public function refundPage()
    {
        return view('pages.refund-policy');
    }
    public function termsPage()
    {
        return view('pages.terms-condition');
    }
    public function PaymentPage()
    {
        return view('pages.payment');
    }
    public function darkfiberPage()
    {
        return view('pages.dark-fiber');
    }

    // payment
    public function bankpaymentPage()
    {
        return view('pages.bank-payment');
    }
}
