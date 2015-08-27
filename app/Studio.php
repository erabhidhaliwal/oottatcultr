<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
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
     * The roles that belong to the user.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist')->withPivot('approved');
    }

    /**
     * Get the tags for the studio.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * Get the tattoos for the studio.
     */
    public function tattoos()
    {
        return $this->belongsToMany('App\Tattoo');
    }


}
