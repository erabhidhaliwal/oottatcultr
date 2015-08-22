<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    //

    /**
     * The roles that belong to the user.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }


}
