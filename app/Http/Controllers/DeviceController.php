<?php

namespace App\Http\Controllers;

use App\Models\Devices\Maker;
use App\Models\Devices\Headset;
use App\Models\Devices\Keyboard;
use App\Models\Devices\Mic;
use App\Models\Devices\Monitor;
use App\Models\Devices\Mouse;
use App\Models\Devices\Mousebungee;
use App\Models\Devices\Mousepad;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class DeviceController extends Controller
{
    public function showDevicesList()
    {
        return view('devices.list');
    }
    public function showDeviceGenre()
    {
        return view('devices.genre');
    }
    public function showDeviceProduct(Router $router)
    {
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceParam = $routeParams['device'];
        $makerParam = $routeParams['maker'];
        $productParam = $routeParams['product'];

        $maker_name = Maker::where('maker_name', $makerParam)->first()->maker_name;
        switch ($deviceParam) {
            case 'headsets':
                $headset = Headset::where('headset_name', $productParam)->first();
                break;
            case 'keyboards':
                $keyboard = Keyboard::where('keyboard_name', $productParam)->first();
                break;
            case 'mics':
                $mic = Mic::where('mic_name', $productParam)->first();
                break;
            case 'monitors':
                $monitor = Monitor::where('monitor_name', $productParam)->first();
                break;
            case 'mouses':
                $mouse = Mouse::where('mouse_name', $productParam)->first();
                break;
            case 'mousebungees':
                $mousebungee = Mousebungee::where('mousebungee_name', $productParam)->first();
                break;
            case 'mousepads':
                $mousepad = Mousepad::where('mousepad_name', $productParam)->first();
                break;
            default:
                //
                break;
        }
        


        return view('devices.product');
    }

    // 管理者用
    public function showDeviceAddPage()
    {
        return view('devices.add');
    }
    public function addDevice()
    {
        //
    }
    public function showDeviceEditPage()
    {
        return view('devices.edit');
    }
    public function editDevice()
    {
        //
    }
}
