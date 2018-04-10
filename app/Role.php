<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function users()
    {
    //     return $this->belongsToMany(User::class);
            return $this->belongsToMany('App\User');
  }

    // public function users()
    // {
        
    //     // Si el nombre de la tabla es diferente a lo predeterminado o el ID de la tabla tiene otro nombre.
    //     return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');
    // }
}