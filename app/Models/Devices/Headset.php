<?php

namespace App\Models\Devices;

use Illuminate\Database\Eloquent\Model;

class Headset extends Model
{
	protected $fillable = [
	    'device_name', 'maker_id',
    ];
    
    public function getMaker()
    {
        return $this->belongsTo('App\Models\Devices\Maker', 'maker_id');
    }
}
