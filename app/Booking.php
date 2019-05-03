<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
