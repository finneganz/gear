<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage()
    {
        return view('users.user');
    }
    public function showUserEditPage()
    {
        return view('users.edit');
    }
    public function editUser()
    {
        //
    }
}
