<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\Devices\Maker;
use App\Models\GameSettings\Resolution;
use App\Http\Requests\UserSettingRequest;
use App\Domains\UserDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;

class UserController extends BaseController
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
    public function showUserList(User $user)
    {
        $users = $user->orderBy('id', 'ASC')->take(10)->get();
        $isLoggedIn = $this->authCheck();
        return view('users.list', compact('users', 'isLoggedIn'));
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

        // ユーザーのデバイス情報＆設定を連想配列に
        $userDomain = new UserDomain;
        $userDevices = $userDomain->userDevicesToAssociativeArray($userHeadset, $userKeyboard, $userMic, $userMonitor, $userMouse, $userMouse, $userMousebungee, $userMousepad);
        $userSettings = $userDomain->userSettingsToAssociativeArray($userConfig, $userMonitorSetting, $userVideoSetting, $userMouseSetting, $userResolution);

        // nullを削除
        $userDevices = array_filter($userDevices);
        $userSettings = array_filter($userSettings);

        foreach($userDevices as $genre => $userDevice)
        {
            $userDevice->device_name = str_replace('_', ' ', $userDevice->device_name);
            $userDevice->genre = $genre . 's';
            $userDevice->maker_name = Maker::where('id', $userDevice->maker_id)->first()->maker_name;
        }

        $userDevices = json_encode($userDevices);
        $userSettings = json_encode($userSettings);
        $isLoggedIn = $this->authCheck();

        return view('users.user', compact('user', 'userId', 'userSettings', 'userDevices', 'isLoggedIn'));
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

        // ユーザーのデバイス情報＆設定を連想配列に
        $userDomain = new UserDomain;
        $userDevices = $userDomain->userDevicesToAssociativeArray($userHeadset, $userKeyboard, $userMic, $userMonitor, $userMouse, $userMouse, $userMousebungee, $userMousepad);
        $userSettings = $userDomain->userSettingsToAssociativeArray($userConfig, $userMonitorSetting, $userVideoSetting, $userMouseSetting, $userResolution);

        $userDevices = array_filter($userDevices);
        $userSettings = array_filter($userSettings);
        $userDevices = json_encode($userDevices);
        $userSettings = json_encode($userSettings);
        $isLoggedIn = $this->authCheck();

        return view('users.edit', compact('user', 'userId', 'userSettings', 'userDevices', 'isLoggedIn'));
    }
    public function editUser(UserSettingRequest $request)
    {
        // Config
        $this->userConfig->config_filepath = $request->input('configFilepath');
        $this->userConfig->autoexec_filepath = $request->input('autoexecFilepath');
        $this->userConfig->windows_sensitivity = $request->input('windowsSensitivity');
        $this->userConfig->ingame_sensitivity = $request->input('inGameSensitivity');
        
        // モニター設定
        $this->userMonitorSetting->setting_params = $request->input('monitorSetting');

        // ビデオ設定
        $this->userVideoSetting->resolution_id = Resolution::where('resolution', $request->resolution)->first()->id;
        $this->userVideoSetting->streatch = $request->streatch;
        $this->userVideoSetting->anti_alias = $request->antiAlias;
        $this->userVideoSetting->shadow_quality = $request->shadowQuality;

        // マウス設定
        $this->userMouseSetting->polling_rate = $request->input('dpi');
        $this->userMouseSetting->dpi = $request->input('pollingRate');

        // デバイス
        // $this->user->headset_id = $request->headset;
        // $this->user->keyboard_id = $request->keyboard;
        // $this->user->mic_id = $request->mic;
        // $this->user->monitor_id = $request->monitor;
        // $this->user->mouse_id = $request->mouse;
        // $this->user->mousebungee_id = $request->mousebungee;
        // $this->user->mousepad_id = $request->mousepad;

        $this->userConfig->save();
        $this->userMonitorSetting->save();
        $this->userVideoSetting->save();
        $this->userMouseSetting->save();
        $this->user->save();

        return redirect()->action(
            'UserController@showUserPage', ['username' => $this->userId],
        );
    }
}
