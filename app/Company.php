<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function event()
    {
        return $this->hasMany('App\Event', 'event_id');
    }
}
