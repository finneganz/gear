<?php

namespace App\Http\Controllers;

use App\Models\Devices\Maker;
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
        $device->device_name = str_replace('_', ' ', $device->device_name);
        $device->maker_name = Maker::find($device->id)->maker_name;

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
        $deviceDomain = new DeviceDomain;
        $device = $deviceDomain->getProductOfDevice($routeParams);
        $device->device_name = $request->input('deviceName');
        $device->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
        $device->save();

        return view('devices.list');
    }
}
