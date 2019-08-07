<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepacademic extends Model
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
}
