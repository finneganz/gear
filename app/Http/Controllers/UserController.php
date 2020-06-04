<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage(int $username)
    {
        // twitterAPI関係がはっきりしたら、上のint => string と $user_idを入れ替えること
        // $user_id = User::where('username', $username)->first()->id;

        // ユーザーidを取得
        $user_id = User::where('id', $username)->first()->id;
        // ユーザーconfig情報を取得
        $user_config = User::find($user_id)->getUserConfig;

        return view('users.user', compact('user_id', 'user_config'));
    }
    public function showUserEditPage(int $username)
    {

        return view('users.edit');
    }
    public function editUser()
    {
        //
    }
}
