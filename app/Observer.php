<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    protected $table = 'observations';
    protected $fillable =[
        'id',
        'user_id',
        'course_id',
        //'user_role_id',
        'creator_id',
        'creator_rol_id',
        'observer_scene_id',
        'observer_category_id',
        'observer_type_id',
        'observer_note_id',
        'observer_code_id',
        'observation',
        //'state',
    ];
    
    
    
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
        // el primer id corresponde a la fila de la tabla 2 y el 'idperfil' corresponde al campo de la tabla usuario
    }
    
    public function observerscene(){
        return $this->hasOne('App\Observerscene','id','observer_scene_id');
    }
    public function observertype(){
        return $this->hasOne('App\Observertype','id','observer_type_id');
    }
    
    public function course(){
        return $this->hasOne('App\Course','id','course_id');
    }
    
    public function creatorrole(){
        return $this->hasOne('App\Role','id','creator_rol_id');
    }
    
    public function observernote(){
        return $this->hasOne('App\Observernote','id','observer_note_id');
    }
    
    
    
    public function users()
       {
            //return $this->belongsTo('App\User');
            return $this->belongsTo(User::class, 'useer_id');
       } 

    

    // public function course(){
    //     return $this->hasOne('App\CourseUser','course_id','course_id');
    // }

    // public function course()
    // {
    //     return $this->belongsToMany('App\Observer', 'courses_users')
    //                 ->withPivot('course_id', 'student_id');
    // }


    public function creator(){
        return $this->hasOne(User::class, 'id', 'creator_id');
    }
    
    public function creator_role(){
        return $this->hasOne(User::class, 'role_id', 'creator_role');
    }
    
    public function obsdecurso(){
        return $this->hasOne(course::class, 'id', 'course_id');
    }

    
    
 }



