<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\PolicyExpired;

class LastfileController extends Controller
{
    
public function index()
    {
        $today = carbon::now();
        $lasts = DB::table('lasts')
        
        ->whereDate('expiry', $today)
        ->get();

        return view('/lastfile', ['lasts' => $lasts]);
        mail::to('stephen.waweru@fep-group')->send(new PolicyExpired());
      
    }

}
