<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Collection as Collection;
use Illuminate\Http\Request;
use App\Http\Requests\ObserverStoreRequest;
use App\Http\Requests\ObserverUpdateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use DB;

use App\Observer;
use App\Level;
use App\Course;
use App\Subject; 
use App\User; 
use App\Observerscene; 
use App\Observercategory; 
use App\Observercode; 
use App\Observernote; 
use App\CourseUser; 
use App\Role; 
use App\Materia; 

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::all();
        return view('admin.materias.index',compact('courses'));
    }
    public function materia_list($id)
    {
        $course = Course::find($id);

        //dd($course);
        $materias = Materia::where('course_id', $id)->paginate(20);
        
        // Observerscene::orderBy('id', 'ASC')->pluck('name','id');
        // $estudiante = Observer::where('id', $id)->pluck('user_id', 'id')->first();

        return view('admin.materias.materia_list',compact('materias', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
