<?php

namespace App\Http\Controllers;
use carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpireController extends Controller
{

public function index()
    {
        $today = carbon::now();
        $lasts = DB::table('lasts')
        
        ->whereDate('expiry', $today)
        ->get();

        return view('/lastfile', ['lasts' => $lasts]);
        mail::to('stephen.waweru@fep-group')->send(new PolicyExpired($lasts));
    }
    
}
