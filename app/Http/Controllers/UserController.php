<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // twitterAPI関係がはっきりしたら、$userを入れ替えること。web.phpにAuthミドルウェアも追加。
        // $user = Auth::id();

        // ユーザーidを取得(ページ確認用)
        $user = User::where('id', $username)->first()->id;
        //ユーザーconfig情報を取得
        $user_config = User::find($user_id)->getUserConfig;

        return view('users.edit', compact('user_id', 'user_config'));
    }
    public function editUser()
    {
        //
    }
}
