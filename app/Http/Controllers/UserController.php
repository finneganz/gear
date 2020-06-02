<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\GameSettings\Config;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage(int $username)
    {
        // $user_id = User::where('username', $username)->select($id)->first();
        $user_id = User::where('id', $username)->select('id')->first();
        $user_config = Config::where('user_id', $user_id->id)
            ->select(
                'config_filepath',
                'autoexec_filepath',
                'windows_sensitivity',
                'ingame_sensitivity',
            )->first();
        return view('users.user', compact('user_id', 'user_config'));
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
