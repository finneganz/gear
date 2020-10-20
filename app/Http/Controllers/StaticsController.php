<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends BaseController
{
    public function showAbout()
    {   
        $auth = $this->getAuthUser();
        return view('statics.about', compact('auth'));
    }
    public function showPolicy()
    {   
        $auth = $this->getAuthUser();
        return view('statics.policy', compact('auth'));
    }
    public function showContact()
    {   
        $auth = $this->getAuthUser();
        return view('statics.contact', compact('auth'));
    }
    public function contact()
    {   
        //
    }
}
