<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Http\Requests\ContactRequest;
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
    public function contact(ContactRequest $request)
    {   
        Mail::to('gear.archiveApp@gmail.com')
            ->send(new ContactMail($request));
            
        return redirect()->action('UserController@showUserList');
    }
}
