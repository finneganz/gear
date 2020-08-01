<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    protected $table = 'mouses';

    protected $fillable = [
        'device_name', 'maker_id',
    ];
}
