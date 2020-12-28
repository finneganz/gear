<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDeviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->request->get('deviceType')) {
            case 'headset':
                return [
                    'deviceName' => 'required|unique:headsets,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
             break;
            case 'keyboard':
                return [
                    'deviceName' => 'required|unique:keyboards,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mic':
                return [
                    'deviceName' => 'required|unique:mics,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'monitor':
                return [
                    'deviceName' => 'required|unique:monitors,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mouse':
                return [
                    'deviceName' => 'required|unique:mouses,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mousebungee':
                return [
                    'deviceName' => 'required|unique:mousebungees,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mousepad':
                return [
                    'deviceName' => 'required|unique:mousepads,device_name|not_regex:/\s/',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            default:
                return [
                    'deviceType' => ['required', 'regex:/headset|keyboard|mic|monitor|mouse|mousebungee|mousepad|mousepad/'],
                    'deviceName' => 'required',
                    'makerName' => 'required|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
        }
    }
}
