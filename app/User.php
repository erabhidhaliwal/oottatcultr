<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'social', 'contact', 'avatar', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];




    /**
     * check if user profile has been completed
     *
     * @return boolean
     */
    public function type(){
        return $this->type;
    }


    /**
     * Get the tattoos uoloaded by the user.
     */
    public function tattoos()
    {
        return $this->hasMany('App\Tattoo');
    }

    /**
     * Get the followers of the user.
     */
    public function follows()
    {
        return $this->hasMany('App\Follow');
    }

}
