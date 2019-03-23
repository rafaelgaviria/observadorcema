<?php

namespace App\Http\Controllers\Admin;
//use Request;

use Illuminate\Support\Collection as Collection; 
use Illuminate\Http\Request;
//use App\Http\Requests\AcademicStoreRequest;
//use App\Http\Requests\AcademicUpdateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Academic; 
use App\Course;
use App\User; 
use App\CourseUser; 
use App\Materia; 
use App\Rating; 

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

        return view('admin.materias.materia_list',compact('materias', 'course'));
    }

    public function miobservadoracademico()
    {
        $id = Auth::id();
        $student = User::where('id', $id)->get();
        $course = User::where('id', $id)->pluck('course','id')->first();
        $namecourse = Course::where('id', $course)->pluck('name','id')->first();
        $materias = Materia::where('course_id', $course)->get();
        // $totalmaterias = Materia::where('course_id', $course)->count();
        // $academic = Academic::where('user_id', $student)->first();
        
        $ob_academics = Academic::where('user_id',$id)->get();
        return view('admin.academic.student.academico',compact('materias', 'course', 'student', 'ob_academics', 'namecourse'));
    }

    public function academicocurso()
    {
        $coordinador = Auth::id();
        $course = User::where('id', $coordinador)->pluck('course','id')->first();
        $namecourse = Course::where('id', $course)->pluck('name','id')->first();

        $estudiantes = DB::table('users')
            ->where('role_id', '=', 5)->where('state', '=', TRUE)->where('course', '=', $course)->orderBy('name', 'ASC')->get();
        $materias = Materia::where('course_id', $course)->get();

        // $cp_01 = Academic::where
        // dd($estudiantes);
        // $ob_academics = Academic::where('user_id',$id)->get();
        // foreach($materias as $materia){
        //     $cp_01[] = DB::table('academics')->where('course_id',$course)->get();
        // }
		// foreach($estudiantes as $estudiante){
		// 	$cp_01[] = DB::table('academics')->where('user_id',$estudiante->id)->get();
        // }
        $estudiantes = DB::table('academics')
            // ->groupBy('user_id')
            ->select('id','user_id','materia_id', 'cp_01', 'course_id')
            ->where('course_id',$course)
            ->orderBy('user_id', 'ASC')
            ->get();

            // ->toJson();
            // Creamos una instancia de Collection con los resultados
            // $results = collect(DB::select(DB::raw($sql),['materia_id' => $id]));
            // dd($sql);

        // $estudiantes = $results
    // // Mapeamos el arreglo para que tenga llaves útiles
    // ->mapWithKeys(function ($item) {
    //     return [
    //         'brand'   => $item[0],
    //         'type'    => $item[1],
    //         'valor_1' => $item[2],
    //         'valor_2' => $item[3],
    //         'valor_3' => $item[4],
    //     ];
    // })
    // // Realizamos la agrupación de elementos
    // ->groupBy(['brand', 'type']);

    //  dd($academics);
        return view('admin.academic.teacher.academicocurso',compact('coordinador', 'course', 'estudiantes', 'materias', 'namecourse', 'cp_01'));
    }
    public function student_list($id)
    {
        $course = Materia::where('id', $id)->pluck('course_id','id')->first();
        $students = User::where('course',$course)->where('state', '=', TRUE)->where('role_id', '=', 5)->orderBy('name', 'ASC')->get();
        $creator = Auth::id();
        // $students = User::where('course',$course)->where('id', 586)->get();
        $materias = Materia::where('id', $id)->first();
        // $ratings = Rating::orderBy('id', 'ASC')->pluck('name','id');
        return view('admin.materias.student_list',compact('materias', 'students', 'course', 'creator','cp_01'));
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
        $course = $request->course_id;
        //return Request::all();
        //return $request->user_id;
        // $request->validate([
        //     'user_id' =>'required',
        //     'course_id' =>'required',
        //     'materia_id' =>'required',
        //     'creator_id' =>'required',
        //     'cp_1' => 'required',
        //     'cp_2' => 'required',
        //     'cp_3' => 'required',
        //     'cp_4' => 'required',
        //     'cp_5' => 'required',
        //     'cp_6' => 'required',
        //     'cp_7' => 'required',
        //     'cp_8' => 'required',
        //     'cp_9' => 'required',
        //     'cp_10' => 'required',
        //     'cp_11' => 'required',
        //     'cp_12' => 'required'
        // ]);
        //Guardar los datos
        for($e=1;$e<=$request->student_count;$e++){
            if(isset($request->cp_1[$e][1]))
                $e11 = $request->cp_1[$e][1];
            else
                $e11 = NULL;
                
            if(isset($request->cp_2[$e][2]))
                $e22 = $request->cp_2[$e][2];
            else
                $e22 = NULL;
            if(isset($request->cp_3[$e][3]))
                $e33 = $request->cp_3[$e][3];
            else
                $e33 = NULL;
            if(isset($request->cp_4[$e][4]))
                $e44 = $request->cp_4[$e][4];
            else
                $e44 = NULL;
            if(isset($request->cp_5[$e][5]))
                $e55 = $request->cp_5[$e][5];
            else
                $e55 = NULL;
            if(isset($request->cp_6[$e][6]))
                $e66 = $request->cp_6[$e][6];
            else
                $e66 = NULL;
            if(isset($request->cp_7[$e][7]))
                $e77 = $request->cp_7[$e][7];
            else
                $e77 = NULL;
            if(isset($request->cp_8[$e][8]))
                $e88 = $request->cp_8[$e][8];
            else
                $e88 = NULL;
            if(isset($request->cp_9[$e][9]))
                $e99 = $request->cp_9[$e][9];
            else
                $e99 = NULL;
            if(isset($request->cp_10[$e][10]))
                $e1010 = $request->cp_10[$e][10];
            else
                $e1010 = NULL;
            if(isset($request->cp_11[$e][11]))
                $e1111 = $request->cp_11[$e][11];
            else
                $e1111 = NULL;
            if(isset($request->cp_12[$e][12]))
                $e1212 = $request->cp_12[$e][12];
            else
                $e1212 = NULL;

                $academic = Academic::create([
                    'user_id' =>$request->user_id[$e],
                    'course_id' =>$request->course,
                    'materia_id' =>$request->materia_id,
                    'creator_id' =>$request->creator_id,
                    'cp_01'=>$e11,
                    'cp_02'=>$e22,
                    'cp_03'=>$e33,
                    'cp_04'=>$e44,
                    'cp_05'=>$e55,
                    'cp_06'=>$e66,
                    'cp_07'=>$e77,
                    'cp_08'=>$e88,
                    'cp_09'=>$e99,
                    'cp_10'=>$e1010,
                    'cp_11'=>$e1111,
                    'cp_12'=>$e1212
                ]);

        }
        
        return redirect()->route('materias.show', $course)->with('info', '¡El registro académico del curso fue creado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Route::get('/miobservador', function(){
        //  return 'Esta es el área del Observador del estudiante';
        // });
        Route::get('/', function () {
            return view('welcome');
        });        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $id = 1;
        $academic = Academic::where('course_id',$id)->get();
        dd($academic);
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
