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
use App\Http\Requests\AddDeviceRequest;
use App\Http\Requests\EditDeviceRequest;
use Illuminate\Routing\Router;
use App\Domains\DeviceDomain;

class DeviceController extends Controller
{
    public function showDeviceList()
    {
        return view('devices.list');
    }
    public function showDeviceGenre(Router $router)
    {
        // ルートパラメータを取得
        $routeParam = $router->getCurrentRoute()->parameters();
        $deviceGenreParam = $routeParam['device'];
        $deviceDomain = new DeviceDomain;
        $devices = $deviceDomain->getDeviceOfGenre($deviceGenreParam);
        
        return view('devices.genre', compact('devices','deviceGenreParam'));
    }
    public function showDeviceProduct(Router $router)
    {
        // ルートパラメータを取得
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceDomain = new DeviceDomain;
        $device = $deviceDomain->getProductOfDevice($routeParams);

        return view('devices.product', compact('device'));
    }

    // 管理者用
    public function showDeviceAddPage()
    {
        return view('devices.add');
    }
    public function addDevice(AddDeviceRequest $request)
    {
        $deviceDomain = new DeviceDomain;
        $deviceDomain->addNewDevice($request);
    }
    public function showDeviceEditPage()
    {
        return view('devices.edit');
    }
    public function editDevice(Router $router, EditDeviceRequest $request)
    {
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceParam = $routeParams['device'];
        $makerParam = $routeParams['maker'];
        $productParam = $routeParams['product'];
        $makerId = Maker::where('maker_name', $makerParam)->first()->id;
        
        switch ($deviceParam) {
            case 'headsets':
                $deviceProduct = Headset::where('headset_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'keyboards':
                $deviceProduct = Keyboard::where('keyboard_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mics':
                $deviceProduct = Mic::where('mic_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'monitors':
                $deviceProduct = Monitor::where('monitor_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mouses':
                $deviceProduct = Mouse::where('mouse_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mousebungees':
                $deviceProduct = Mousebungee::where('mousebungee_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mousepads':
                $deviceProduct = Mousepad::where('mousepad_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->device_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            default:
                //
                break;
        }

        return view('devices.list');
    }
}
