<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tattoo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'url', 'artist_id', 'description', 'user_id'];


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
