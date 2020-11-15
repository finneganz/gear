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
    public function getSomeDevices()
    {
        $headset = Headset::find(1)->first();
        $keyboard = Keyboard::find(1)->first();
        $mic = Mic::find(1)->first();
        $monitor = Monitor::find(1)->first();
        $mouse = Mouse::find(1)->first();
        $mousebungee = Mousebungee::find(1)->first();
        $mousepad = Mousepad::find(1)->first();

        $headset->maker_name = $headset->getMaker->maker_name;
        $keyboard->maker_name = $keyboard->getMaker->maker_name;
        $mic->maker_name = $mic->getMaker->maker_name;
        $monitor->maker_name = $monitor->getMaker->maker_name;
        $mouse->maker_name = $mouse->getMaker->maker_name;
        $mousebungee->maker_name = $mousebungee->getMaker->maker_name;
        $mousepad->maker_name = $mousepad->getMaker->maker_name;

        $headset->genre = 'headsets';
        $keyboard->genre = 'keyboards';
        $mic->genre = 'mics';
        $monitor->genre = 'monitors';
        $mouse->genre = 'mouses';
        $mousebungee->genre = 'mousebungees';
        $mousepad->genre = 'mousepads';

        $devices = array($headset, $keyboard, $mic, $monitor, $mouse, $mousebungee, $mousepad);
        foreach($devices as $device)
        {
            $device->device_name = str_replace('_', ' ', $device->device_name);
            $device->maker_name = str_replace('_', ' ', $device->maker_name);
        }

        return $devices;
    }
    public function getDeviceOfGenre(string $deviceGenreParam)
    {
        switch ($deviceGenreParam) {
            case 'headsets':
                $devices = Headset::inRandomOrder()->take(100)->get();
                break;
            case 'keyboards':
                $devices = Keyboard::inRandomOrder()->take(100)->get();
                break;
            case 'mics':
                $devices = Mic::inRandomOrder()->take(100)->get();
                break;
            case 'monitors':
                $devices = Monitor::inRandomOrder()->take(100)->get();
                break;
            case 'mouses':
                $device = Mouse::inRandomOrder()->take(100)->get();
                break;
            case 'mousebungees':
                $devices = Mousebungee::inRandomOrder()->take(100)->get();
                break;
            case 'mousepads':
                $devices = Mousepad::inRandomOrder()->take(100)->get();
                break;
            default:
                //
                break;
        }
        foreach($devices as $device)
        {
            $device->device_name = str_replace('_', ' ', $device->device_name);
            $device->maker_name = $device->getMaker->maker_name;
        }
        return $devices;
    }
    public function getProductOfDevice(array $routeParams)
    {
        $deviceParam = $routeParams['device'];
        $makerParam = $routeParams['maker'];
        $productParam = $routeParams['product'];

        $makerId = Maker::where('maker_name', $makerParam)->first()->id;
        switch ($deviceParam) {
            case 'headsets':
                $device = Headset::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'keyboards':
                $device = Keyboard::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'mics':
                $device = Mic::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'monitors':
                $device = Monitor::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'mouses':
                $device = Mouse::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'mousebungees':
                $device = Mousebungee::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            case 'mousepads':
                $device = Mousepad::where('device_name', $productParam)->where('maker_id', $makerId)->first();
                break;
            default:
                //
                break;
        }
        return $device;
    }
    public function getSubDevices(array $routeParams)
    {
        $genreParam = $routeParams['device'];
        $makerParam = $routeParams['maker'];
        $makerId = Maker::where('maker_name', $makerParam)->first()->id;

        switch ($genreParam) {
            case 'headsets':
                $subDevices = Headset::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'keyboards':
            $subDevices = Keyboard::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'mics':
            $subDevices = Mic::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'monitors':
            $subDevices = Monitor::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'mouses':
            $subDevices = Mouse::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'mousebungees':
            $subDevices = Mousebungee::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            case 'mousepads':
            $subDevices = Mousepad::where('maker_id', $makerId)->inRandomOrder()->take(10)->get();
                break;
            default:
                //
                break;
        }
        return $subDevices;
    }
    public function addNewDevice(object $request)
    {
        switch ($request->deviceType) {
            case 'headset':
                $device = new Headset;
                break;
            case 'keyboard':
                $device = new Keyboard;
                break;
            case 'mic':
                $device = new Mic;
                break;
            case 'monitor':
                $device = new Monitor;
                break;
            case 'mouse':
                $device = new Mouse;
                break;
            case 'mousebungee':
                $device = new Mousebungee;
                break;
            case 'mousepad':
                $device = new Mousepad;
                break;
            default:
                //
                break;
        }
        $device->device_name = $request->input('deviceName');
        $device->maker_id = Maker::where('maker_name', $request->makerName)->first()->id;
        
        return $device;
    }
    public function save(object $modelInstance)
    {
        $modelInstance->save();
    }
}
