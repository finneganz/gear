<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
        'device_name', 'maker_id',
    ];
}
