<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PasswordReset;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    

    protected $table = 'users';
     

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'firstname','lastname', 'email','img','bio', 'password', 'phone', 'username','country','ref_bal', 'usr','status', 'currency', 'referal', 'reg_date', 'act_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
      return $this->password;
    }
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }

    public function ticket(){
        return $this->hasMany('App\ticket', 'user_id');
    }

    public function comments(){
        return $this->hasMany('App\comments', 'sender_id');
    }

}
