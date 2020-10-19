<?php

namespace App\Domains;

class UserDomain
{
    public function userDevicesToAssociativeArray($headset, $keyboard, $mic, $monitor, $mouse, $mousebungee, $mousepad)
    {
        $userDevices = [
            'headset' => $headset,
            'keyboard' => $keyboard,
            'mic' => $mic,
            'monitor' => $monitor,
            'mouse' => $mouse,
            'mousebungee' => $mousebungee,
            'mousepad' => $mousepad,
        ];
        return $userDevices;
    }
    public function userSettingsToAssociativeArray($config, $monitorSetting, $videoSetting, $mouseSetting, $resolution)
    {
        $userSettings = [
            'config' => $config,
            'monitorSetting' => $monitorSetting,
            'videoSetting' => $videoSetting,
            'mouseSetting' => $mouseSetting,
            'resolution' => $resolution,
        ];
        return $userSettings;
    }
    // 入力値からDB保存用に変換
    public function isStretch($request)
    {
        if($request === 'stretched')
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function antiAlias($request)
    {
        switch ($request) {
            case 'None':
                return 0;
                break;
            case '2x MSAA':
                return 1;
                break;
            case '4x MSAA':
                return 2;
                break;
            case '8x MSAA':
                return 3;
                break;
        }
    }
    public function shadowQuality($request)
    {
        switch ($request) {
            case 'very low':
                return 0;
                break;
            case 'low':
                return 1;
                break;
            case 'middle':
                return 2;
                break;
            case 'high':
                return 3;
                break;
        }   
    }
}