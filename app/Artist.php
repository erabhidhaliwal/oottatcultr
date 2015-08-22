<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //


    /**
     * The studios that belong to the artist.
     */
    public function studios()
    {
        return $this->belongsToMany('App\Studio');
    }

    /**
     * Get the tattoos that benongs to the artist.
     */
    public function tattoos()
    {
        return $this->hasMany('App\Tattoo');
    }

}
