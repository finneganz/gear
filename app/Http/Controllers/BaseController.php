<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected function getAuthUser()
    {
        $auth = Auth::user() ? Auth::user() : 'false';
        return $auth;
    }
}
