<?php

namespace App\Models\GameSettings;

use Illuminate\Database\Eloquent\Model;

class MouseSetting extends Model
{
    protected $fillable = [
        'user_id', 'dpi', 'polling_rate',
    ];
}
