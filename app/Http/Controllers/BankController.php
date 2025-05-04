<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
   
    public function redirectToBank(Request $request)
    {
        $bank = $request->bank;

        $bankUrls = [
            'meezan' => 'https://www.meezanbank.com/',
            'hbl'    => 'https://www.hbl.com/',
            'ubl'    => 'https://www.ubldigital.com/',
            'mcb'    => 'https://www.mcb.com.pk/',
        ];

        if (array_key_exists($bank, $bankUrls)) {
            return redirect()->away($bankUrls[$bank]);
        }

        return redirect()->back()->with('error', 'Invalid bank selected');
    }
}
