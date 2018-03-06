<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Use App\Level;
Use App\Course;
Use App\Subject;


class PageController extends Controller
{
    public function blog(Request $request){
        $levels = Level::orderBy('id', 'DESC')->paginate(11);
        $courses = Course::orderBy('id', 'DESC')->paginate(5);
        $subjects = Subject::orderBy('id','asc')->paginate(15);
        
        //dd($subjects);
        return view('web.posts', compact('subjects','levels','courses'));
        // $producto = Producto::find($id);
        // $estados = Estado::orderBy('nombre','asc')->pluck('nombre','id');
        // return view('admin.productos.editar',compact('producto','estados'));



    }
}
