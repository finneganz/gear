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
            // cfgファイルアップロード
            'config' => ['nullable', 'cfg_file'],
            'autoexec' => ['nullable', 'cfg_file'],
            // 1~11の整数のみ
            'windowsSensitivity' => ['nullable', 'regex:/[1-9]|1[0-1]/'],
            // 整数or少数
            'inGameSensitivity' => ['nullable', 'regex:/\d+(\.\d+)?/'],
            // // 1~9999のみ
            'dpi' => ['nullable', 'regex:/[1-9]|[1-9][0-9]{1,3}/'],
            // // 1~9999のみ
            'pollingRate' => ['nullable', 'regex:/[1-9]|[1-9][0-9]{1,3}/'],

            // デバイス
            'headset' => ['nullable', 'exists:App\Models\Devices\Headset,device_name'],
            'keyboard' => ['nullable', 'exists:App\Models\Devices\Keyboard,device_name'],
            'mic' => ['nullable', 'exists:App\Models\Devices\Mic,device_name'],
            'monitor' => ['nullable', 'exists:App\Models\Devices\Monitor,device_name'],
            'mouse' => ['nullable', 'exists:App\Models\Devices\Mouse,device_name'],
            'mousebungee' => ['nullable', 'exists:App\Models\Devices\Mousebungee,device_name'],
            'mousepad' => ['nullable', 'exists:App\Models\Devices\Mousepad,device_name'],
        ];
    }
    protected function prepareForValidation()
    {
        $headset = ($this->filled('headset')) ? (str_replace(' ', '_', $this->headset)) : '';
        $keyboard = ($this->filled('keyboard')) ? (str_replace(' ', '_', $this->keyboard)) : '';
        $mic = ($this->filled('mic')) ? (str_replace(' ', '_', $this->mic)) : '';
        $monitor = ($this->filled('monitor')) ? (str_replace(' ', '_', $this->monitor)) : '';
        $mouse = ($this->filled('mouse')) ? (str_replace(' ', '_', $this->mouse)) : '';
        $mousebungee = ($this->filled('mousebungee')) ? (str_replace(' ', '_', $this->mousebungee)) : '';
        $mousepad = ($this->filled('mousepad')) ? (str_replace(' ', '_', $this->mousepad)) : '';

        $this->merge([
            'headset' => $headset,
            'keyboard' => $keyboard,
            'mic' => $mic,
            'monitor' => $monitor,
            'mouse' => $mouse,
            'mousebungee' => $mousebungee,
            'mousepad' => $mousepad,
        ]);
    }
}
