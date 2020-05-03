<?php

namespace App\Models\GameSettings;

use Illuminate\Database\Eloquent\Model;

class MonitorSetting extends Model
{
    protected $fillable = [
        'user_id', 'setting_params',
    ];
}
