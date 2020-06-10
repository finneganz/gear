<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\GameSettings\Resolution;
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
        // ユーザーモニター設定を取得
        $user_monitor_setting = User::find($user_id)->getUserMonitorSetting;
        // ユーザービデオ設定を取得
        $user_video_setting = User::find($user_id)->getUserVideoSetting;
        // ユーザーマウス設定を取得
        $user_mouse_setting = User::find($user_id)->getUserMouseSetting;
        // ユーザー解像度を取得
        $user_resolution = Resolution::find($user_video_setting->resolution_id);

        // ユーザーのヘッドセットを取得
        $user_headset = User::find($user_id)->getUserHeadset;
        // ユーザーのキーボードを取得
        $user_keyboard = User::find($user_id)->getUserKeyboard;
        // ユーザーのマイクを取得
        $user_mic = User::find($user_id)->getUserMic;
        // ユーザーのモニターを取得
        $user_monitor = User::find($user_id)->getUserMonitor;
        // ユーザーのマウスを取得
        // $user_mouse = User::find($user_id)->getUserMouse;
        // ユーザーのマウスバンジーを取得
        $user_mousebungee = User::find($user_id)->getUserMousebungee;
        // ユーザーのマウスパッドを取得
        $user_mousepad = User::find($user_id)->getUserMousepad;

        return view('users.user', compact('user_id', 'user_config', 'user_monitor_setting', 'user_video_setting', 'user_mouse_setting', 'user_mouse_setting', 'user_resolution', 'user_headset', 'user_keyboard', 'user_mic', 'user_monitor', 'user_mousebungee', 'user_mousepad'));
    }
    public function showUserEditPage(int $username)
    {
        // twitterAPI関係がはっきりしたら、$userを入れ替えること。web.phpにAuthミドルウェアも追加。
        // $user = Auth::id();

        // ユーザーidを取得(ページ確認用)
        $user = User::where('id', $username)->first()->id;
        //ユーザーconfig情報を取得
        $user_config = User::find($user_id)->getUserConfig;
        // ユーザーモニター設定を取得
        $user_monitor_setting = User::find($user_id)->getUserMonitorSetting;
        // ユーザービデオ設定を取得
        $user_video_setting = User::find($user_id)->getUserVideoSetting;
        // ユーザーマウス設定を取得
        $user_mouse_setting = User::find($user_id)->getUserMouseSetting;
        // ユーザー解像度を取得
        $user_resolution = Resolution::find($user_video_setting->resolution_id);

        // ユーザーのヘッドセットを取得
        $user_headset = User::find($user_id)->getUserHeadset;
        // ユーザーのキーボードを取得
        $user_keyboard = User::find($user_id)->getUserKeyboard;
        // ユーザーのマイクを取得
        $user_mic = User::find($user_id)->getUserMic;
        // ユーザーのモニターを取得
        $user_monitor = User::find($user_id)->getUserMonitor;
        // ユーザーのマウスを取得
        // $user_mouse = User::find($user_id)->getUserMouse;
        // ユーザーのマウスバンジーを取得
        $user_mousebungee = User::find($user_id)->getUserMousebungee;
        // ユーザーのマウスパッドを取得
        $user_mousepad = User::find($user_id)->getUserMousepad;

        return view('users.user', compact('user_id', 'user_config', 'user_monitor_setting', 'user_video_setting', 'user_mouse_setting', 'user_mouse_setting', 'user_resolution', 'user_headset', 'user_keyboard', 'user_mic', 'user_monitor', 'user_mousebungee', 'user_mousepad'));
    }
    public function editUser()
    {
        //
    }
}
