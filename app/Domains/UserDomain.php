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
}