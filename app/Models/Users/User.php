<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mouse_id', 'mousepad_id', 'mousebungee_id', 'keyboard_id',
        'headset_id', 'mic_id', 'monitor_id',
    ];

    public function getUserConfig()
    {
        return $this->hasOne('App\Models\GameSettings\Config');
    }
}
