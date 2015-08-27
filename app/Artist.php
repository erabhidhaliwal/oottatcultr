<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //

    /**
     * Get the User details for the Artist.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The studios that belong to the artist.
     */
    public function studios()
    {
        return $this->belongsToMany('App\Studio')->withPivot('approved');
    }

    /**
     * Get the tattoos that benongs to the artist.
     */
    public function tattoos()
    {
        return $this->belongsToMany('App\Tattoo');
    }

    /**
     * Get the tags that benongs to the artist.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }


}
