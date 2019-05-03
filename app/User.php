<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function ads()
    {
        return $this->hasMany('App\Ad', 'user_id');
    }


    public function favoriteAds()
    {
        return $this->hasMany('App\FavoriteAd', 'user_id');
    }

    public function received_messages()
    {
        return $this->hasMany('App\Message', 'receiver_id');
    }

    public function sent_messages()
    {
        return $this->hasMany('App\Message', 'sender_id');
    }

    public function booking()
    {
        return $this->hasMany('App\Booking', 'booking_id');
    }
}
