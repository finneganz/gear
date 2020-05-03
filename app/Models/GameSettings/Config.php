<?php

namespace App\Models\GameSettings;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'user_id', 'config_filepath', 'autoexec_filepath',
        'windows_sensitivity', 'ingame_sensitivity',
    ];
}
