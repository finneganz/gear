<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected function authCheck()
    {
        $isLoggedIn = Auth::check() ? 'true' : 'false';
        return $isLoggedIn; 
    }
}
