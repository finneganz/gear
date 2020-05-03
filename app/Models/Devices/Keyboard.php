<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $fillable = [
		'keyboard_name', 'maker_id',
	];
}
