<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Collection as Collection; 
use Illuminate\Http\Request;
use App\Http\Requests\MateriaStoreRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Academic;
use App\Sepacademic;
use App\Opacademic;
use App\Course;
use App\User; 
use App\Materia; 

class OpacademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

                $academic = Opacademic::create([
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

    public function calificacionesdelcurso($id)
	{
		
		$curso = ($id);

		// $totalstudents = User::all()->where('role_id', '=', 5)->where('state', '=', true)->count();
		// LISTADO DE CURSOS
		for($i=1;$i<=1;$i++){
			$estudiantes[$i] = DB::table('users')
				->where('role_id', '=', 5)->where('state', '=', TRUE)->where('course', '=', $curso)->orderBy('name', 'ASC')->get();
			
				// $total[$i] = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where("course_id","=",$i)->count();
			
			foreach($estudiantes[$i] as $estudiante){
				// $asistencia[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_2p, $end_2p])
				// 		->where('observer_category_id',1)->count();
                $cp_01[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_01',1)->count();
                $cp_02[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_02',1)->count();
                $cp_03[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_03',1)->count();
                $cp_04[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_04',1)->count();
                $cp_05[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_05',1)->count();
                $cp_06[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_06',1)->count();
                $cp_07[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_07',1)->count();
                $cp_08[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_08',1)->count();
                $cp_09[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_09',1)->count();
                $cp_10[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_10',1)->count();
                $cp_11[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_11',1)->count();
                $cp_12[$i][] = DB::table('opacademics')->where('user_id',$estudiante->id)->where('cp_12',1)->count();
			}
					//print_r($observacion);
		}
        // dd($estudiantes);
		return view('admin.materias.calificacionesdelcurso', compact('estudiantes', 'curso','cp_01','cp_02','cp_03','cp_04','cp_05','cp_06','cp_07','cp_08','cp_09','cp_10','cp_11','cp_12'));
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Opacademic::find($id)->delete();
        return back()->with('info', 'Materia eliminada correctamente');
    }
}