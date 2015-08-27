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
     * Get the user who has uploaded the tattoo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tattoos that benongs to the artist.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    /**
     * Get the studios that benongs to the artist.
     */
    public function studios()
    {
        return $this->belongsToMany('App\Studio');
    }

    /**
     * Get the Tags that benongs to the tattoo.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
