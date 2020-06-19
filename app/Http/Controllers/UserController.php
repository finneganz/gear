<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\GameSettings\Resolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;

class UserController extends Controller
{
    private $user;
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
            
            // ユーザーを取得
            $this->user = User::where('id', $userName)->first();
            // ユーザーidを取得
            $this->userId = $this->user->id;
            // ユーザーconfig情報を取得
            $this->userConfig = User::find($this->userId)->getUserConfig;
            // ユーザーモニター設定を取得
            $this->userMonitorSetting = User::find($this->userId)->getUserMonitorSetting;
            // ユーザービデオ設定を取得
            $this->userVideoSetting = User::find($this->userId)->getUserVideoSetting;
            // ユーザーマウス設定を取得
            $this->userMouseSetting = User::find($this->userId)->getUserMouseSetting;
            // ユーザー解像度を取得
            $this->userResolution = Resolution::find($this->userVideoSetting->resolution_id);
    
            // ユーザーのヘッドセットを取得
            $this->userHeadset = User::find($this->userId)->getUserHeadset;
            // ユーザーのキーボードを取得
            $this->userKeyboard = User::find($this->userId)->getUserKeyboard;
            // ユーザーのマイクを取得
            $this->userMic = User::find($this->userId)->getUserMic;
            // ユーザーのモニターを取得
            $this->userMonitor = User::find($this->userId)->getUserMonitor;
            // ユーザーのマウスを取得
            $this->userMouse = User::find($this->userId)->getUserMouse;
            // ユーザーのマウスバンジーを取得
            $this->userMousebungee = User::find($this->userId)->getUserMousebungee;
            // ユーザーのマウスパッドを取得
            $this->userMousepad = User::find($this->userId)->getUserMousepad;
        }

    }
    public function showUserList()
    {
        return view('users.list');
    }
    public function showUserPage(int $username)
    {
        $user = $this->user;
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

        return view('users.user', compact('user', 'userId', 'userConfig', 'userMonitorSetting', 'userVideoSetting', 'userMouseSetting', 'userResolution', 'userHeadset', 'userKeyboard', 'userMic', 'userMonitor', 'userMousebungee', 'userMouse', 'userMousepad'));
    }
    public function showUserEditPage(int $username)
    {
        $user = $this->user;
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

        return view('users.user', compact('user', 'userId', 'userConfig', 'userMonitorSetting', 'userVideoSetting', 'userMouseSetting', 'userResolution', 'userHeadset', 'userKeyboard', 'userMic', 'userMonitor', 'userMousebungee', 'userMouse', 'userMousepad'));
    }
    public function editUser(Request $request)
    {
        // Config
        $this->userConfig->config_filepath = $request->input('configFilepath');
        $this->userConfig->autoexec_filepath = $request->input('autoexecFilepath');
        $this->userConfig->windows_sensitivity = $request->input('windowsSensitivity');
        $this->userConfig->ingame_sensitivity = $request->input('inGameSensitivity');
        
        // モニター設定
        $this->userMonitorSetting->setting_params = $request->input('monitorSetting');

        // ビデオ設定
        $this->userVideoSetting->resolution_id = $request->resolution;
        $this->userVideoSetting->streatch = $request->streatch;
        $this->userVideoSetting->anti_alias = $request->antiAlias;
        $this->userVideoSetting->shadow_quality = $request->shadowQuality;

        // マウス設定
        $this->userMouseSetting->polling_rate = $request->input('dpi');
        $this->userMouseSetting->dpi = $request->input('pollingRate');

        // デバイス
        $this->user->headset_id = $request->headset;
        $this->user->keyboard_id = $request->keyboard;
        $this->user->mic_id = $request->mic;
        $this->user->monitor_id = $request->monitor;
        $this->user->mouse_id = $request->mouse;
        $this->user->mousebungee_id = $request->mousebungee;
        $this->user->mousepad_id = $request->mousepad;

        $this->userConfig->save();
        $this->userMonitorSetting->save();
        $this->userVideoSetting->save();
        $this->userMouseSetting->save();
        $this->user->save();

        return view('users.user');
    }
}
