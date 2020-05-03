<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Headset extends Model
{
	protected $fillable = [
	    'headset_name', 'maker_id',
	];
}
