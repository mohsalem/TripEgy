<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Event', 'company_id');
    }

    public function ratingevent()
    {
        return $this->hasMany('App\RatingEvent', 'event_id');
    }

}


