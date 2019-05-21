<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phonenumber',
        'document',
        'documenttype_id',
        'officialcode',
        'course',
        'role_id',
        'file'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profiles(){
        return $this-belongToMany(Profile::class);
    }

    public function getFullnameAttribute() 
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function showFullname()
    {
        return $this->fresh()->fullname; // make sure you call fresh instance or you'll get an error that fullname is not found or something like that...
    }
    
    // public function course(){
    //     return $this->belongsTo(Course::class);
    // }    

    // public function course(){
    //     return $this->hasMany('App\Course','id', 'course');
    // }

    public function course(){
        return $this->hasOne('App\Course','id', 'course');
        // return $this->hasOne('App\UserProfile', 'userID');
    }


    //$this->hasMany('App\Comment', 'foreign_key', 'local_key');
    // public function course(){
    //     return $this->belongsTo('App\course','id','course');
    // }
    
       
    public function observaciones()
    {
        return $this->hasMany(Observer::class);
        
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
        
    // public function firstname(){
    //     return $this->hasMany('id', 'firstname');
    // }
      
    // //Who brought him onboard..
    // public function lastname(){
    //     return $this->belongsTo('id', 'lastname');
    // }

    // public function getFullNameAttribute()
    // {
    //     return $this->firstname . " " . $this->lastname;
    // }

    public function roles()
    {
        //return $this->belongsToMany(Role::class);
        return $this->belongsToMany('App\Role');
    }
    public function observationsusers()
    {
        //return $this->belongsToMany(Role::class);
        return $this->belongsToMany('App\Observer');
    }

    // public function roles()
    // {
    //     // Si el nombre de la tabla es diferente a lo predeterminado o el ID de la tabla tiene otro nombre.
    //     return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id')
    //                 ->withPivot('id', 'role_id', 'user_id');
    // }


    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role', 'user_roles')
    //                 ->withPivot('create', 'read','update', 'delete');
    // }


    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role', 'role_user')
    //                 ->withPivot('id', 'role_id', 'user_id');
    // }
}