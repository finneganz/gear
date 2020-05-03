<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Mousepad extends Model
{
    protected $fillable = [
        'mousepad_name', 'maker_id',
    ];
}
