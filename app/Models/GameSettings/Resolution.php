<?php

namespace app\Models\GameSettings;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    protected $fillable = [
        'aspect', 'resolution',
    ];
}
