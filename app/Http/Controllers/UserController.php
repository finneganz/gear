<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\GameSettings\Resolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;

class UserController extends Controller
{
    private $user_id;
    private $user_config;
    private $user_monitor_setting;
    private $user_video_setting;
    private $user_mouse_setting;
    private $user_resolution;
    private $user_headset;
    private $user_keyboard;
    private $user_mic;
    private $user_monitor;
    private $user_mouse;
    private $user_mousebungee;
    private $user_mousepad;

    public function __construct(Router $router)
    {
        // ルートパラメータを取得
        $route_param = $router->getCurrentRoute()->parameters(); 
        if($route_param)
        {
            // twitterAPI関係がはっきりしたら、上のint => string と $user_idを入れ替えること
            // $user_id = User::where('username', $username)->first()->id;

            $username = $route_param['username'];
            // ユーザーidを取得
            $this->user_id = User::where('id', $username)->first()->id;
            // ユーザーconfig情報を取得
            $this->user_config = User::find($this->user_id)->getUserConfig;
            // ユーザーモニター設定を取得
            $this->user_monitor_setting = User::find($this->user_id)->getUserMonitorSetting;
            // ユーザービデオ設定を取得
            $this->user_video_setting = User::find($this->user_id)->getUserVideoSetting;
            // ユーザーマウス設定を取得
            $this->user_mouse_setting = User::find($this->user_id)->getUserMouseSetting;
            // ユーザー解像度を取得
            $this->user_resolution = Resolution::find($this->user_video_setting->resolution_id);
    
            // ユーザーのヘッドセットを取得
            $this->user_headset = User::find($this->user_id)->getUserHeadset;
            // ユーザーのキーボードを取得
            $this->user_keyboard = User::find($this->user_id)->getUserKeyboard;
            // ユーザーのマイクを取得
            $this->user_mic = User::find($this->user_id)->getUserMic;
            // ユーザーのモニターを取得
            $this->user_monitor = User::find($this->user_id)->getUserMonitor;
            // ユーザーのマウスを取得
            $this->user_mouse = User::find($this->user_id)->getUserMouse;
            // ユーザーのマウスバンジーを取得
            $this->user_mousebungee = User::find($this->user_id)->getUserMousebungee;
            // ユーザーのマウスパッドを取得
            $this->user_mousepad = User::find($this->user_id)->getUserMousepad;
        }

    }
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage(int $username)
    {
        $user_id = $this->user_id;
        $user_config = $this->user_config;
        $user_monitor_setting = $this->user_monitor_setting;
        $user_video_setting = $this->user_video_setting;
        $user_mouse_setting = $this->user_mouse_setting;
        $user_resolution = $this->user_resolution;
        $user_headset = $this->user_headset;
        $user_keyboard = $this->user_keyboard;
        $user_mic = $this->user_mic;
        $user_monitor = $this->user_monitor;
        $user_mouse = $this->user_mouse;
        $user_mousebungee = $this->user_mousebungee;
        $user_mousepad = $this->user_mousepad;

        return view('users.user', compact('user_id', 'user_config', 'user_monitor_setting', 'user_video_setting', 'user_mouse_setting', 'user_resolution', 'user_headset', 'user_keyboard', 'user_mic', 'user_monitor', 'user_mousebungee', 'user_mouse', 'user_mousepad'));
    }
    public function showUserEditPage(int $username)
    {
        $user_id = $this->user_id;
        $user_config = $this->user_config;
        $user_monitor_setting = $this->user_monitor_setting;
        $user_video_setting = $this->user_video_setting;
        $user_mouse_setting = $this->user_mouse_setting;
        $user_resolution = $this->user_resolution;
        $user_headset = $this->user_headset;
        $user_keyboard = $this->user_keyboard;
        $user_mic = $this->user_mic;
        $user_monitor = $this->user_monitor;
        $user_mouse = $this->user_mouse;
        $user_mousebungee = $this->user_mousebungee;
        $user_mousepad = $this->user_mouse;

        return view('users.user', compact('user_id', 'user_config', 'user_monitor_setting', 'user_video_setting', 'user_mouse_setting', 'user_resolution', 'user_headset', 'user_keyboard', 'user_mic', 'user_monitor', 'user_mousebungee', 'user_mouse', 'user_mousepad'));
    }
    public function editUser()
    {
        //
    }
}
