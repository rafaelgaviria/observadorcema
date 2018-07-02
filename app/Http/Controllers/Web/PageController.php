<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Use App\Level;
Use App\Course;
Use App\Subject;


class PageController extends Controller
{
    public function autenticacion(Request $request){
        return view('auth.login');
    }
}
