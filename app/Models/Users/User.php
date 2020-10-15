<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mouse_id', 'mousepad_id', 'mousebungee_id', 'keyboard_id',
        'headset_id', 'mic_id', 'monitor_id', 'email', 'password',
    ];
    
    protected $hidden = [
        'password',
    ];

    public function getUserConfig()
    {
        return $this->hasOne('App\Models\GameSettings\Config', 'user_id');
    }
    public function getUserMonitorSetting()
    {
        return $this->hasOne('App\Models\GameSettings\MonitorSetting', 'user_id');
    }
    public function getUserMouseSetting()
    {
        return $this->hasOne('App\Models\GameSettings\MouseSetting', 'user_id');
    }
    public function getUserVideoSetting()
    {
        return $this->hasOne('App\Models\GameSettings\VideoSetting', 'user_id');
    }
    public function getUserHeadset()
    {
        return $this->belongsTo('App\Models\Devices\Headset', 'headset_id');
    }
    public function getUserKeyboard()
    {
        return $this->belongsTo('App\Models\Devices\Keyboard', 'keyboard_id');
    }
    public function getUserMic()
    {
        return $this->belongsTo('App\Models\Devices\Mic', 'mic_id');
    }
    public function getUserMonitor()
    {
        return $this->belongsTo('App\Models\Devices\Monitor', 'monitor_id');
    }
    public function getUserMouse()
    {
        return $this->belongsTo('App\Models\Devices\Mouse', 'mouse_id');
    }
    public function getUserMousebungee()
    {
        return $this->belongsTo('App\Models\Devices\Mousebungee', 'mousebungee_id');
    }
    public function getUserMousepad()
    {
        return $this->belongsTo('App\Models\Devices\Mousepad', 'mousepad_id');
    }
}
