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
    public function getProductOfDevice(Array $routeParams)
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
    public function addNewDevice(Object $request)
    {
        switch ($request->deviceType) {
            case 'headset':
                $device = new Headset;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'keyboard':
                $device = new Keyboard;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mic':
                $device = new Mic;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'monitor':
                $device = new Monitor;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mouse':
                $device = new Mouse;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mousebungee':
                $device = new Mousebungee;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mousepad':
                $device = new Mousepad;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->device_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            default:
                //
                break;
        }
    }
}