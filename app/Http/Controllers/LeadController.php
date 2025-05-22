<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\LeadMail;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'option' => 'required',
        ]);
       
        $leadData = $request->all();
        $leadData['mymail'] = "inhousesales.nova@gmail.com";

        Mail::send('emails.lead', $leadData, function($message) use ($leadData) {
            $message->to($leadData['mymail'], "nova")
                ->subject('User Request Mail'.$leadData['name']);
        });

      

        return redirect()->back()->with(['success' => 'Your Request has been submitted!']);
    }
}
