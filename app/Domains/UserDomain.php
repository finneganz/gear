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
    public function convertStretchForDB($request)
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
    public function convertAntiAliasForDB($request)
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
    public function convertShadowQualityForDB($request)
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
    // DB保存値から表示用に変換
    public function convertStretchForDisplay(int $stretch)
    {
        if($stretch === 1)
        {
            return 'stretched';
        }
        else
        {
            return 'black bar';
        }
    }
    public function convertAntiAliasForDisplay(int $antiAlias)
    {
        switch ($antiAlias) {
            case 0:
                return 'NONE';
                break;
            case 1:
                return '2x MSAA';
                break;
            case 2:
                return '4x MSAA';
                break;
            case 3:
                return '8x MSAA';
                break;
        }
    }
    public function convertShadowqualityForDisplay(int $shadowQuality)
    {
        switch ($shadowQuality) {
            case 0:
                return 'very low';
                break;
            case 1:
                return 'low';
                break;
            case 2:
                return 'middle';
                break;
            case 3:
                return 'high';
                break;
        }
    }
    public function convertAspectForDisplay(int $aspect)
    {
        switch ($aspect) {
            case 0:
                return '4:3';
                break;
            case 1:
                return '16:9';
                break;
            case 2:
                return '16:10';
                break;
        }
    }
}