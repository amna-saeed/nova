<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCvToHr;

class CareerController extends Controller 
{
    public function sendCV(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric', 
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only('name', 'email', 'number');
        $file = $request->file('cv');

        Mail::to('hr@nova.net.pk')->send(new SendCvToHr($data, $file));

        return back()->with('success', 'CV sent successfully!');
    }
}
