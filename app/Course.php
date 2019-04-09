<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Course extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'director',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo('App\user', 'user_id', 'local_key');
    // }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
