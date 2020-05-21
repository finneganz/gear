<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function showDevicesList()
    {
        return view('devices.list');
    }
    public function showDeviceProduct()
    {
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
