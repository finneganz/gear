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
    public function showDeviceGenre(Router $router)
    {
        // ルートパラメータを取得
        $routeParam = $router->getCurrentRoute()->parameters();
        $deviceGenreParam = $routeParam['device'];

        switch ($deviceGenreParam) {
            case 'headsets':
                $headsets = Headset::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'keyboards':
                $keyboards = Keyboard::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'mics':
                $mics = Mic::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'monitors':
                $monitors = Monitor::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'mouses':
                $mice = Mouse::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'mousebungees':
                $mousebungees = Mousebungee::orderBy('id', 'ASC')->take(10)->get();
                break;
            case 'mousepads':
                $mousepads = Mousepad::orderBy('id', 'ASC')->take(10)->get();
                break;
            default:
                //
                break;
        }
        
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
