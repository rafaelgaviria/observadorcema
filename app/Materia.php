<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $timestamps = false;
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
