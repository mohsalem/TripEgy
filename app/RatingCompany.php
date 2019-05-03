<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatingCompany extends Model
{
    public function company()
    {
        return $this->belongsTo('App\company', 'company_id');
    }
}
