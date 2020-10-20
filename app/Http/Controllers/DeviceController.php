<?php

namespace App\Http\Controllers;

use App\Models\Devices\Maker;
use Illuminate\Http\Request;
use App\Http\Requests\AddDeviceRequest;
use App\Http\Requests\EditDeviceRequest;
use Illuminate\Routing\Router;
use App\Domains\DeviceDomain;

class DeviceController extends BaseController
{
    public function showDeviceList()
    {
        $auth = $this->getAuthUser();
        $deviceDomain = new DeviceDomain;
        $devices = $deviceDomain->getSomeDevices();
        $devices = json_encode($devices);
        return view('devices.list', compact('devices', 'auth'));
    }
    public function showDeviceGenre(Router $router)
    {
        // ルートパラメータを取得
        $routeParam = $router->getCurrentRoute()->parameters();
        $deviceGenreParam = $routeParam['device'];
        $deviceDomain = new DeviceDomain;
        $devices = $deviceDomain->getDeviceOfGenre($deviceGenreParam);
        $auth = $this->getAuthUser();
        
        return view('devices.genre', compact('devices','deviceGenreParam', 'auth'));
    }
    public function showDeviceProduct(Router $router)
    {
        // ルートパラメータを取得
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceDomain = new DeviceDomain;
        $device = $deviceDomain->getProductOfDevice($routeParams);
        $device->device_name = str_replace('_', ' ', $device->device_name);
        $device->maker_name = $device->getMaker->maker_name;
        $auth = $this->getAuthUser();

        return view('devices.product', compact('device', 'auth'));
    }

    // 管理者用
    public function showDeviceAddPage()
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $auth = $this->getAuthUser();
            return view('devices.add', compact('auth'));
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function addDevice(AddDeviceRequest $request)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $deviceDomain = new DeviceDomain;
            $device = $deviceDomain->addNewDevice($request);
            $deviceDomain->save($device);
    
            return redirect()->action('DeviceController@showDeviceList');
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function showDeviceEditPage(Router $router)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $routeParams = $router->getCurrentRoute()->parameters();
            $deviceDomain = new DeviceDomain;
            $device = $deviceDomain->getProductOfDevice($routeParams);
            $device->maker_name = $device->getMaker->maker_name;
            $auth = $this->getAuthUser();
    
            return view('devices.edit', compact('device', 'auth'));
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function editDevice(Router $router, EditDeviceRequest $request)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $routeParams = $router->getCurrentRoute()->parameters();
            $deviceDomain = new DeviceDomain;
            $device = $deviceDomain->getProductOfDevice($routeParams);
            $device->device_name = $request->input('deviceName');
            $device->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
            $deviceDomain->save($device);
    
            return redirect()->action('DeviceController@showDeviceList');
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
}
