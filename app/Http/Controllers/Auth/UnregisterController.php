<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;
use App\Http\Controllers\BaseController;

class UnregisterController extends BaseController
{
    public function showUnregister()
    {
        $auth = $this->getAuthUser();
        return view('auth.unregister', compact('auth'));
    }
    public function unregister()
    {
        User::where('id', Auth::id())->first()->forceDelete();
        return redirect()->action('UserController@showUserList');
    }
}
