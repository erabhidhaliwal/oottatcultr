<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tattoo extends Model
{
    //


    /**
     * Get the artist that owns the tattoo.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    /**
     * Get the user who has uploaded the tattoo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
