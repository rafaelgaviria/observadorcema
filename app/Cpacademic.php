<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpacademic extends Model
{
    protected $fillable =[
        'id',
        'user_id',
        'course_id',
        'materia_id',
        'creator_id',
        'cp_01',
        'cp_02',
        'cp_03',
        'cp_04',
        'cp_05',
        'cp_06',
        'cp_07',
        'cp_08',
        'cp_09',
        'cp_10',
        'cp_11',
        'cp_12',
    ];
    public function materia(){
        return $this->hasOne('App\Materia','id','materia_id');
    }
    public function profesor(){
        return $this->hasOne('App\user','id','creator_id');
    }
    public function course(){
        return $this->hasOne('App\Course','id','course_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
        // el primer id corresponde a la fila de la tabla 2 y el 'idperfil' corresponde al campo de la tabla usuario
    }
}
