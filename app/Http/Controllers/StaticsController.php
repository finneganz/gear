<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function showAbout()
    {   
        return view('statics.about');
    }
    public function showPolicy()
    {   
        return view('statics.policy');
    }
    public function showContact()
    {   
        return view('statics.contact');
    }
    public function contact()
    {   
        //
    }
}
