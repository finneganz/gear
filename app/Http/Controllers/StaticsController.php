<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function contact(Request $request)
    {   
        Mail::to('example@example.com')
            ->send(new ContactMail($request));
    }
}
