<?php

namespace App\Domains;

use App\Models\Devices\Maker;
use App\Models\Devices\Headset;
use App\Models\Devices\Keyboard;
use App\Models\Devices\Mic;
use App\Models\Devices\Monitor;
use App\Models\Devices\Mouse;
use App\Models\Devices\Mousebungee;
use App\Models\Devices\Mousepad;

class DeviceDomain
{
    public function getDeviceOfGenre(String $deviceGenreParam)
    {
        switch ($deviceGenreParam) {
            case 'headsets':
                $devices = Headset::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Headset::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'keyboards':
                $devices = Keyboard::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Keyboard::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'mics':
                $devices = Mic::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Mic::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'monitors':
                $devices = Monitor::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Monitor::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'mouses':
                $device = Mouse::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Mouse::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'mousebungees':
                $devices = Mousebungee::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Mousebungee::find($device->id)->getMaker->maker_name;
                }
                break;
            case 'mousepads':
                $devices = Mousepad::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->device_name = str_replace('_', ' ', $device->device_name);
                    $device->maker_name = Mousepad::find($device->id)->getMaker->maker_name;
                }
                break;
            default:
                //
                break;
        }
        return $devices;
    }
}