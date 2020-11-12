<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSettingRequest extends FormRequest
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
        return [
            // 1~11の整数のみ
            'windowsSensitivity' => ['nullable', 'regex:/[1-9]|1[0-1]/'],
            // 整数or少数
            'inGameSensitivity' => ['nullable', 'regex:/\d+(\.\d+)?/'],
            // // 1~9999のみ
            'dpi' => ['nullable', 'regex:/[1-9]|[1-9][0-9]{1,3}/'],
            // // 1~9999のみ
            'pollingRate' => ['nullable', 'regex:/[1-9]|[1-9][0-9]{1,3}/'],

            // デバイス
            // 'headset' => ['nullable', 'exists:App\Models\Devices\Headset,device_name'],
            // 'keyboard' => ['nullable', 'exists:App\Models\Devices\Keyboard,device_name'],
            // 'mic' => ['nullable', 'exists:App\Models\Devices\Mic,device_name'],
            // 'monitor' => ['nullable', 'exists:App\Models\Devices\Monitor,device_name'],
            // 'mouse' => ['nullable', 'exists:App\Models\Devices\Mouse,device_name'],
            // 'mousebungee' => ['nullable', 'exists:App\Models\Devices\Mousebungee,device_name'],
            // 'mousepad' => ['nullable', 'exists:App\Models\Devices\Mousepad,device_name'],
        ];
    }
}
