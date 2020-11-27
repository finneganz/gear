<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\Devices\Maker;
use App\Models\Devices\Headset;
use App\Models\Devices\Keyboard;
use App\Models\Devices\Mic;
use App\Models\Devices\Monitor;
use App\Models\Devices\Mouse;
use App\Models\Devices\Mousebungee;
use App\Models\Devices\Mousepad;
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
        if(url()->full() !== 'http://gear-archive')
        {
            // ルートパラメータからusernameを取得
            $userName = $router->getCurrentRoute()->parameters['username'];   
            // ユーザーを取得
            $this->user = User::where('username', $userName)->first();
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
        $auth = $this->getAuthUser();
        return view('users.list', compact('users', 'auth'));
    }
    public function showUserPage(string $userName)
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

        $userDomain = new UserDomain;
        $userVideoSetting->stretch = $userDomain->convertStretchForDisplay($userVideoSetting->stretch);
        $userVideoSetting->anti_alias = $userDomain->convertAntialiasForDisplay($userVideoSetting->anti_alias);
        $userVideoSetting->shadow_quality = $userDomain->convertShadowqualityForDisplay($userVideoSetting->shadow_quality);
        $userResolution->aspect = $userDomain->convertAspectForDisplay($userResolution->aspect);

        // ユーザーのデバイス情報＆設定を連想配列に
        $userDevices = $userDomain->userDevicesToAssociativeArray($userHeadset, $userKeyboard, $userMic, $userMonitor,$userMouse, $userMousebungee, $userMousepad);
        $userSettings = $userDomain->userSettingsToAssociativeArray($userConfig, $userMonitorSetting, $userVideoSetting, $userMouseSetting, $userResolution);

        // nullを削除
        $userDevices = array_filter($userDevices);
        $userSettings = array_filter($userSettings);

        foreach($userDevices as $genre => $userDevice)
        {
            $userDevice->device_name = str_replace('_', ' ', $userDevice->device_name);
            $userDevice->genre = $genre . 's';
            $userDevice->maker_name = $userDevice->getMaker->maker_name;
        }

        $userDevices = json_encode($userDevices);
        $userSettings = json_encode($userSettings);
        $auth = $this->getAuthUser();

        return view('users.user', compact('user', 'userId', 'userSettings', 'userDevices', 'auth'));
    }
    public function showUserEditPage(string $userName)
    {
        if(Auth::user()->username !== $this->user->username)
        {
            return redirect()->action('Auth\LoginController@showLoginForm');
        }

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

        $userDomain = new UserDomain;
        $userVideoSetting->stretch = $userDomain->convertStretchForDisplay($userVideoSetting->stretch);
        $userVideoSetting->anti_alias = $userDomain->convertAntialiasForDisplay($userVideoSetting->anti_alias);
        $userVideoSetting->shadow_quality = $userDomain->convertShadowqualityForDisplay($userVideoSetting->shadow_quality);

        // ユーザーのデバイス情報＆設定を連想配列に
        $userDevices = $userDomain->userDevicesToAssociativeArray($userHeadset, $userKeyboard, $userMic, $userMonitor, $userMouse, $userMousebungee, $userMousepad);
        $userSettings = $userDomain->userSettingsToAssociativeArray($userConfig, $userMonitorSetting, $userVideoSetting, $userMouseSetting, $userResolution);

        $userDevices = array_filter($userDevices);
        $userSettings = array_filter($userSettings);
        $userDevices = json_encode($userDevices);
        $userSettings = json_encode($userSettings);
        $auth = $this->getAuthUser();

        // 選択用のデバイスを取得
        $selectHeadsets = Headset::orderBy('id', 'desc')->take(21)->get();
        $selectKeyboards = Keyboard::orderBy('id', 'desc')->take(21)->get();
        $selectMics = Mic::orderBy('id', 'desc')->take(21)->get();
        $selectMonitors = Monitor::orderBy('id', 'desc')->take(21)->get();
        $selectMouses = Mouse::orderBy('id', 'desc')->take(21)->get();
        $selectMousebungees = Mousebungee::orderBy('id', 'desc')->take(21)->get();
        $selectMousepads = Mousepad::orderBy('id', 'desc')->take(21)->get();
        
        $selectHeadsets = $userDomain->devicesStrReplaceForDisplay($selectHeadsets);
        $selectKeyboards = $userDomain->devicesStrReplaceForDisplay($selectKeyboards);
        $selectMics = $userDomain->devicesStrReplaceForDisplay($selectMics);
        $selectMonitors = $userDomain->devicesStrReplaceForDisplay($selectMonitors);
        $selectMouses = $userDomain->devicesStrReplaceForDisplay($selectMouses);
        $selectMousebungees = $userDomain->devicesStrReplaceForDisplay($selectMousebungees);
        $selectMousepads = $userDomain->devicesStrReplaceForDisplay($selectMousepads);

        $selectDevices = $userDomain->selectDevicesToAssociativeArray($selectHeadsets, $selectKeyboards, $selectMics, $selectMonitors, $selectMouses, $selectMousebungees, $selectMousepads);

        $selectDevices = json_encode($selectDevices);

        return view('users.edit', compact('user', 'userId', 'userSettings', 'userDevices', 'auth', 'selectDevices'));
    }
    public function editUser(UserSettingRequest $request)
    {
        $userDomain = new UserDomain;
        // Config
        $this->userConfig->config_filepath = base64_encode(file_get_contents($request->configFilepath));
        $this->userConfig->autoexec_filepath = $request->input('autoexecFilepath');
        $this->userConfig->windows_sensitivity = $request->input('windowsSensitivity');
        $this->userConfig->ingame_sensitivity = $request->input('inGameSensitivity');
        
        // モニター設定
        $this->userMonitorSetting->setting_params = $request->input('monitorSetting');

        // ビデオ設定
        $this->userVideoSetting->resolution_id = Resolution::where('resolution', $request->resolution)->first()->id;
        $this->userVideoSetting->stretch = $userDomain->convertStretchForDB($request->stretch);
        $this->userVideoSetting->anti_alias = $userDomain->convertAntiAliasForDB($request->antiAlias);
        $this->userVideoSetting->shadow_quality = $userDomain->convertShadowQualityForDB($request->shadowQuality);

        // マウス設定
        $this->userMouseSetting->polling_rate = $request->input('dpi');
        $this->userMouseSetting->dpi = $request->input('pollingRate');

        // デバイス設定
        $this->user->headset_id = $request->filled('headset') ? Headset::where('device_name', $userDomain->deviceStrReplaceForDB($request->headset))->first()->id : null ;
        $this->user->keyboard_id = $request->filled('keyboard') ? Keyboard::where('device_name', $userDomain->deviceStrReplaceForDB($request->keyboard))->first()->id : null ;
        $this->user->mic_id = $request->filled('mic') ? Mic::where('device_name', $userDomain->deviceStrReplaceForDB($request->mic))->first()->id : null ;
        $this->user->monitor_id = $request->filled('monitor') ? Monitor::where('device_name', $userDomain->deviceStrReplaceForDB($request->monitor))->first()->id : null ;
        $this->user->mouse_id = $request->filled('mouse') ? Mouse::where('device_name', $userDomain->deviceStrReplaceForDB($request->mouse))->first()->id : null ;
        $this->user->mousebungee_id = $request->filled('mousebungee') ? Mousebungee::where('device_name', $userDomain->deviceStrReplaceForDB($request->mousebungee))->first()->id : null ;
        $this->user->mousepad_id = $request->filled('mousepad') ? Mousepad::where('device_name', $userDomain->deviceStrReplaceForDB($request->mousepad))->first()->id : null ;

        $this->userConfig->save();
        $this->userMonitorSetting->save();
        $this->userVideoSetting->save();
        $this->userMouseSetting->save();
        $this->user->save();

        return redirect()->action(
            'UserController@showUserPage', ['username' => $this->user->username],
        );
    }
    public function downloadConfig()
    {
        $userConfig = '.cfg';
        file_put_contents($userConfig , base64_decode($this->userConfig->config_filepath));
        return response()->download($userConfig, 'config.cfg');
    }
    public function downloadAutoexec()
    {
        $userAutoexec = '.cfg';
        file_put_contents($userAutoexec , base64_decode($this->userConfig->autoexec_filepath));
        return response()->download($userAutoexec, 'autoexec.cfg');
    }
}
