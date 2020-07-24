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

        switch ($deviceGenreParam) {
            case 'headsets':
                $devices = Headset::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->headset_name = str_replace('_', ' ', $device->headset_name);
                }
                break;
            case 'keyboards':
                $devices = Keyboard::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->keyboard_name = str_replace('_', ' ', $device->keyboard_name);
                }
                break;
            case 'mics':
                $devices = Mic::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->mic_name = str_replace('_', ' ', $device->mic_name);
                }
                break;
            case 'monitors':
                $devices = Monitor::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->monitor_name = str_replace('_', ' ', $device->monitor_name);
                }
                break;
            case 'mouses':
                $device = Mouse::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->mouse_name = str_replace('_', ' ', $device->mouse_name);
                }
                break;
            case 'mousebungees':
                $devices = Mousebungee::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->mousebungee_name = str_replace('_', ' ', $device->mousebungee_name);
                }
                break;
            case 'mousepads':
                $devices = Mousepad::orderBy('id', 'ASC')->take(10)->get();
                foreach($devices as $device)
                {
                    $device->mousepad_name = str_replace('_', ' ', $device->mousepad_name);
                }
                break;
            default:
                //
                break;
        }
        
        return view('devices.genre', compact('devices'));
    }
    public function showDeviceProduct(Router $router)
    {
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceParam = $routeParams['device'];
        $makerParam = $routeParams['maker'];
        $productParam = $routeParams['product'];

        $makerId = Maker::where('maker_name', $makerParam)->first()->id;
        switch ($deviceParam) {
            case 'headsets':
                $deviceProduct = Headset::where('headset_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->headset_name = str_replace('_', ' ', $deviceProduct->headset_name);
                break;
            case 'keyboards':
                $deviceProduct = Keyboard::where('keyboard_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->keyboard_name = str_replace('_', ' ', $deviceProduct->keyboard_name);
                break;
            case 'mics':
                $deviceProduct = Mic::where('mic_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mic_name = str_replace('_', ' ', $deviceProduct->mic_name);
                break;
            case 'monitors':
                $deviceProduct = Monitor::where('monitor_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->monitor_name = str_replace('_', ' ', $deviceProduct->monitor_name);
                break;
            case 'mouses':
                $deviceProduct = Mouse::where('mouse_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mouse_name = str_replace('_', ' ', $deviceProduct->mouse_name);
                break;
            case 'mousebungees':
                $deviceProduct = Mousebungee::where('mousebungee_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mousebungee_name = str_replace('_', ' ', $deviceProduct->mousebungee_name);
                break;
            case 'mousepads':
                $deviceProduct = Mousepad::where('mousepad_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mousepad_name = str_replace('_', ' ', $deviceProduct->mousepad_name);
                break;
            default:
                //
                break;
        }

        return view('devices.product', compact('deviceProduct'));
    }

    // 管理者用
    public function showDeviceAddPage()
    {
        return view('devices.add');
    }
    public function addDevice(AddDeviceRequest $request)
    {
        switch ($request->deviceType) {
            case 'headset':
                $device = new Headset;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->headset_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'keyboard':
                $device = new Keyboard;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->keyboard_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mic':
                $device = new Mic;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->mic_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'monitor':
                $device = new Monitor;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->monitor_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mouse':
                $device = new Mouse;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->mouse_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mousebungee':
                $device = new Mousebungee;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->mousebungee_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            case 'mousepad':
                $device = new Mousepad;
                $makerId = Maker::where('maker_name', $request->makerName)->first()->id;
                $device->mousepad_name = $request->input('deviceName');
                $device->maker_id = $makerId;
                $device->save();
                break;
            default:
                //
                break;
        }
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
                $deviceProduct->headset_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'keyboards':
                $deviceProduct = Keyboard::where('keyboard_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->keyboard_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mics':
                $deviceProduct = Mic::where('mic_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mic_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'monitors':
                $deviceProduct = Monitor::where('monitor_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->monitor_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mouses':
                $deviceProduct = Mouse::where('mouse_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mouse_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mousebungees':
                $deviceProduct = Mousebungee::where('mousebungee_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mousebungee_name = $request->input('deviceName');
                $deviceProduct->maker_id = Maker::where('maker_name', $request->input('makerName'))->first()->id;
                $deviceProduct->save();
                break;
            case 'mousepads':
                $deviceProduct = Mousepad::where('mousepad_name', $productParam)->where('maker_id', $makerId)->first();
                $deviceProduct->mousepad_name = $request->input('deviceName');
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
