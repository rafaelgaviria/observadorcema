<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $table = 'courses_users';
    protected $fillable = [
        'course_id',
        //'director_id',
        'student_id'
    ];

    public $timestamps = false;
}