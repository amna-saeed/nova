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
    public function BusinessinternetPage()
    {
        return view('pages.bisiness-internet');
    }
    public function novaPage()
    {
        return view('pages.nova-ai');
    }
    public function technologyPage()
    {
        return view('pages.techonology-partner');
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
   
    public function faqsPage()
    {
        return view('pages.faqs');
    }
    public function darkfiberPage()
    {
        return view('pages.dark-fiber');
    }
    public function locationPage()
    {
        return view('pages.co-location');
    }
    public function dataPage()
    {
        return view('pages.data-vpn');
    }
    public function datacenterPage()
    {
        return view('pages.data-center');
    }
    public function voicePage()
    {
        return view('pages.voice-services');
    }
    public function smePage()
    {
        return view('pages.sme-services');
    }
    public function networkingPage()
    {
        return view('pages.networking-solutions');
    }
    public function businessPage()
    {
        return view('pages.business-partner');
    }
    public function hdCatvPage()
    {
        return view('pages.hd-catv');
    }
    public function telephonePage()
    {
        return view('pages.telephone');
    }
    public function companyPage()
    {
        return view('pages.company-overview');
    }
    public function iplayPage()
    {
        return view('pages.iplay-service');
    }
    public function digitalPage()
    {
        return view('pages.digital-box');
    }

    // payment
    public function bankpaymentPage()
    {
        return view('pages.bank-payment');
    }
}
