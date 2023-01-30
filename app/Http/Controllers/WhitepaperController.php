<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhitepaperController extends Controller
{
    public function whitepaper(){
        return view('web.whitepaper');
    }
}
