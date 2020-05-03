<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Mic extends Model
{
    protected $fillable = [
	  	'mic_name', 'maker_id',
	];
}
