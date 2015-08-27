<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    /**
     * Get the artists that that has the tag.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    /**
     * Get the studios that that has the tag.
     */
    public function studios()
    {
        return $this->belongsToMany('App\Studio');
    }

    /**
     * Get the tattoos that that has the tag.
     */
    public function tattoos()
    {
        return $this->belongsToMany('App\Tattoo');
    }
}
