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


}
