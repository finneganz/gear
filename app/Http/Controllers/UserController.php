<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\GameSettings\Resolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;

class UserController extends Controller
{
    private $userId;
    private $userConfig;
    private $userMonitorSetting;
    private $userVideoSetting;
    private $userMouseSetting;
    private $userResolution;
    private $userHeadset;
    private $userKeyboard;
    private $userMic;
    private $userMonitor;
    private $userMouse;
    private $userMousebungee;
    private $userMousepad;

    public function __construct(Router $router)
    {
        // ルートパラメータを取得
        $routeParam = $router->getCurrentRoute()->parameters(); 
        if($routeParam)
        {
            // twitterAPI関係がはっきりしたら、上のint => string と $user_idを入れ替えること
            // $user_id = User::where('username', $username)->first()->id;

            $userName = $routeParam['username'];
            // ユーザーidを取得
            $this->userId = User::where('id', $userName)->first()->id;
            // ユーザーconfig情報を取得
            $this->userConfig = User::find($this->user_id)->getUserConfig;
            // ユーザーモニター設定を取得
            $this->userMonitorSetting = User::find($this->user_id)->getUserMonitorSetting;
            // ユーザービデオ設定を取得
            $this->userVideoSetting = User::find($this->user_id)->getUserVideoSetting;
            // ユーザーマウス設定を取得
            $this->userMouseSetting = User::find($this->user_id)->getUserMouseSetting;
            // ユーザー解像度を取得
            $this->userResolution = Resolution::find($this->userVideoSetting->resolution_id);
    
            // ユーザーのヘッドセットを取得
            $this->userHeadset = User::find($this->user_id)->getUserHeadset;
            // ユーザーのキーボードを取得
            $this->userKeyboard = User::find($this->user_id)->getUserKeyboard;
            // ユーザーのマイクを取得
            $this->userMic = User::find($this->user_id)->getUserMic;
            // ユーザーのモニターを取得
            $this->userMonitor = User::find($this->user_id)->getUserMonitor;
            // ユーザーのマウスを取得
            $this->userMouse = User::find($this->user_id)->getUserMouse;
            // ユーザーのマウスバンジーを取得
            $this->userMousebungee = User::find($this->user_id)->getUserMousebungee;
            // ユーザーのマウスパッドを取得
            $this->userMousepad = User::find($this->user_id)->getUserMousepad;
        }

    }
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage(int $username)
    {
        $userId = $this->userId;
        $userConfig = $this->userConfig;
        $userMonitorSetting = $this->userMonitorSetting;
        $userVideoSetting = $this->userVideoSetting;
        $userMouseSetting = $this->userMouseSetting;
        $userResolution = $this->userResolution;
        $userHeadset = $this->userHeadset;
        $userKeyboard = $this->userKeyboard;
        $userMic = $this->userMic;
        $userMonitor = $this->userMonitor;
        $userMouse = $this->userMouse;
        $userMousebungee = $this->userMousebungee;
        $userMousepad = $this->userMousepad;

        return view('users.user', compact('userId', 'userConfig', 'userMonitorSetting', 'userVideoSetting', 'userMouseSetting', 'userResolution', 'userHeadset', 'userKeyboard', 'userMic', 'userMonitor', 'userMousebungee', 'userMouse', 'useMousepad'));
    }
    public function showUserEditPage(int $username)
    {
        $userId = $this->userId;
        $userConfig = $this->userConfig;
        $userMonitorSetting = $this->userMonitorSetting;
        $userVideoSetting = $this->userVideoSetting;
        $userMouseSetting = $this->userMouseSetting;
        $userResolution = $this->userResolution;
        $userHeadset = $this->userHeadset;
        $userKeyboard = $this->userKeyboard;
        $userMic = $this->userMic;
        $userMonitor = $this->userMonitor;
        $userMouse = $this->userMouse;
        $userMousebungee = $this->userMousebungee;
        $userMousepad = $this->userMousepad;

        return view('users.user', compact('userId', 'userConfig', 'userMonitorSetting', 'userVideoSetting', 'userMouseSetting', 'userResolution', 'userHeadset', 'userKeyboard', 'userMic', 'userMonitor', 'userMousebungee', 'userMouse', 'useMousepad'));
    }
    public function editUser()
    {
        //
    }
}
