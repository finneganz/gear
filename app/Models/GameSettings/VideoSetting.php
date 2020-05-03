<?php

namespace App\Models\GameSettings;

use Illuminate\Database\Eloquent\Model;

class VideoSetting extends Model
{
    protected $fillable = [
        'user_id', 'resolution_id', 'stretch',
        'anti_alias', 'shadow_quality',
    ];
}
