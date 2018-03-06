<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    protected $table = 'observations';
    protected $fillable =[
        'user_id','course_id','rol_id','creator_id','observer_type_id','observer_scene_id','observer_category_id','observer_note_id','observer_code_id','observation','state',
    ];

    //Crear relación con el modelo Perfil
    public function user(){
        return $this->hasOne('App\User','id','user_id');
        // el primer id corresponde a la fila de la tabla 2 y el 'idperfil' corresponde al campo de la tabla usuario
    }
    
 }



