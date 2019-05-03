<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteAd extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function ads()
    {
        return $this->belongsTo('App\Ad', 'ad_id');
    }
}
