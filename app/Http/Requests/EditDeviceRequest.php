<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Router;

class EditDeviceRequest extends FormRequest
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
    public function rules(Router $router)
    {
        $routeParams = $router->getCurrentRoute()->parameters();
        $deviceParam = $routeParams['device'];
        switch ($deviceParam) {
            case 'headsets':
                return [
                    'deviceName' => 'nullable|unique:headsets,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'keyboards':
                return [
                    'deviceName' => 'nullable|unique:keyboards,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mics':
                return [
                    'deviceName' => 'nullable|unique:mics,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'monitors':
                return [
                    'deviceName' => 'nullable|unique:monitors,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mouses':
                return [
                    'deviceName' => 'nullable|unique:mouses,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mousebungees':
                return [
                    'deviceName' => 'nullable|unique:mousebungees,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            case 'mousepads':
                return [
                    'deviceName' => 'nullable|unique:mousepads,device_name|not_regex:/\s/',
                    'makerName' => 'nullable|exists:App\Models\Devices\Maker,maker_name',
                ];
                break;
            default:
                //
                break;
        }
    }
}
