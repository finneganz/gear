<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $fillable = [
		'device_name', 'maker_id',
	];
}
