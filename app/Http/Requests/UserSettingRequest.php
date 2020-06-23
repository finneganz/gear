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
            'windowsSensitivity' => ['nullable', 'regex:/[1-9]/', 'regex:/1[0-1]/'],
            // 整数or少数
            'inGameSensitivity' => ['nullable', 'regex:/\d+(\.\d+)?/'],
            // // 1~9999のみ
            'dpi' => ['nullable', 'regex:/[1-9]/', 'regex:/[1-9][0-9]{1,3}/'],
            // // 1~9999のみ
            'pollingRate' => ['nullable', 'regex:/[1-9]/', 'regex:/[1-9][0-9]{1,3}/'],
        ];
    }
}
