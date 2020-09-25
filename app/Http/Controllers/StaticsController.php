<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends BaseController
{
    public function showAbout()
    {   
        $isLoggedIn = $this->authCheck();
        return view('statics.about', compact('isLoggedIn'));
    }
    public function showPolicy()
    {   
        $isLoggedIn = $this->authCheck();
        return view('statics.policy', compact('isLoggedIn'));
    }
    public function showContact()
    {   
        $isLoggedIn = $this->authCheck();
        return view('statics.contact', compact('isLoggedIn'));
    }
    public function contact()
    {   
        //
    }
}
