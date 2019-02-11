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

class ObserverController extends Controller
{
	
	// Seguridad para bloquear contenido que solo se puede ver cuando esté logueado
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//PERIODOS
		//1 periodo: febrero 1 a Abril 6
		//2 periodo: abril 9 a Junio 8
		//3 periodo: Junio 12 a Sept 14
		//4 periodo: Sept 17 a Nov 30
		
		// Primer periodo
		$ini_1p = date('2018-02-01 00:00:00');
		$end_1p = date('2018-04-06 23:59:59');
		// Segundo periodo
		$ini_2p = date('2018-04-09 00:00:00');
		$end_2p = date('2018-06-08 23:59:59');
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		// Cuarto periodo
		$ini_4p = date('2018-09-15 00:00:00');
		$end_4p = date('2018-11-30 23:59:59');
		
		// LISTADO DE CURSOS
		for($i=1;$i<=11;$i++){
			$estudiantes[$i] = DB::table('users')
				->where('role_id', '=', 5)->where('course', '=', $i)->orderBy('name', 'ASC')->get();
			
				$total[$i] = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where("course_id","=",$i)->count();
			
			foreach($estudiantes[$i] as $estudiante){
				$asistencia[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',1)->count();
				$puntualidad[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',2)->count();
				$presentacion_personal[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',3)->count();
				$cumplimiento_tareas[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',4)->count();
				$circulares[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',5)->count();
				$tipo_3[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',8)->count();
				$tipo_2[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',7)->count();
				$tipo_1[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',6)->count();
				$acudiente[$i][] = DB::table('observations')->where('user_id',$estudiante->id)->whereBetween('created_at', [$ini_4p, $end_4p])
						->where('observer_category_id',9)->count();
				//echo $estudiante->id." - ".$estudiante->name." - Asistencia: ".$asistencia." - Puntualidad: ".$puntualidad."<br>";
			}
			//print_r($observacion);
		}

		$totalobservaciones = Observer::all()->count();
		$comentarios = Observer::where('observer_note_id', '=', 1)->count();
		$notificaciones = Observer::where('observer_note_id', '=', 2)->count();
		$compromisos = Observer::where('observer_note_id', '=', 3)->count();
		$sancion = Observer::where('observer_note_id', '=', 4)->count();
		$matricula_condicional = Observer::where('observer_note_id', '=', 5)->count();
		$remision_comite_convivencia = Observer::where('observer_note_id', '=', 6)->count();
		$remision_consejo_academico = Observer::where('observer_note_id', '=', 7)->count();
		$cancelacion_matricula = Observer::where('observer_note_id', '=', 8)->count();
		$remision_orientacion = Observer::where('observer_note_id', '=', 9)->count();
		
		//PRIMER PERIODO
		$totalobservaciones_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->count();
		$comentarios_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 1)->count();
		$notificaciones_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 2)->count();
		$compromisos_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 3)->count();
		$sancion_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 4)->count();
		$matricula_condicional_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 5)->count();
		$remision_comite_convivencia_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 6)->count();
		$remision_consejo_academico_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 7)->count();
		$cancelacion_matricula_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 8)->count();
		$remision_orientacion_1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('observer_note_id', '=', 9)->count();
		//SEGUNDO PERIODO
		$totalobservaciones_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->count();
		$comentarios_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 1)->count();
		$notificaciones_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 2)->count();
		$compromisos_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 3)->count();
		$sancion_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 4)->count();
		$matricula_condicional_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 5)->count();
		$remision_comite_convivencia_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 6)->count();
		$remision_consejo_academico_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 7)->count();
		$cancelacion_matricula_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 8)->count();
		$remision_orientacion_2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('observer_note_id', '=', 9)->count();
		//TERCER PERIODO
		$totalobservaciones_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->count();
		$comentarios_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 1)->count();
		$notificaciones_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 2)->count();
		$compromisos_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 3)->count();
		$sancion_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 4)->count();
		$matricula_condicional_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 5)->count();
		$remision_comite_convivencia_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 6)->count();
		$remision_consejo_academico_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 7)->count();
		$cancelacion_matricula_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 8)->count();
		$remision_orientacion_3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 9)->count();
		//CUARTO PERIODO
		$totalobservaciones_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->count();
		$comentarios_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 1)->count();
		$notificaciones_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 2)->count();
		$compromisos_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 3)->count();
		$sancion_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 4)->count();
		$matricula_condicional_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 5)->count();
		$remision_comite_convivencia_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 6)->count();
		$remision_consejo_academico_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 7)->count();
		$cancelacion_matricula_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 8)->count();
		$remision_orientacion_4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('observer_note_id', '=', 9)->count();
		
		$observations = Observer::orderBy('id','DES')->paginate(20);

		return view('admin.observer.index', compact(
		'estudiantes','total','asistencia','puntualidad', 'presentacion_personal','cumplimiento_tareas','circulares','tipo_3', 'tipo_2', 'tipo_1','acudiente',		
		'observations', 'totalobservaciones',
		
		//ACUMULADO AÑO TIPO DE NOTA
		'comentarios','notificaciones','compromisos','sancion','matricula_condicional','remision_comite_convivencia','remision_consejo_academico','cancelacion_matricula','remision_orientacion',
		//PRIMER PERIODO TIPO DE NOTA
		'totalobservaciones_1p','comentarios_1p','notificaciones_1p','compromisos_1p','sancion_1p','matricula_condicional_1p','remision_comite_convivencia_1p','remision_consejo_academico_1p','cancelacion_matricula_1p','remision_orientacion_1p',
		//SEGUNDO PERIODO TIPO DE NOTA
		'totalobservaciones_2p','comentarios_2p','notificaciones_2p','compromisos_2p','sancion_2p','matricula_condicional_2p','remision_comite_convivencia_2p','remision_consejo_academico_2p','cancelacion_matricula_2p','remision_orientacion_2p',
		//TERCER PERIODO TIPO DE NOTA
		'totalobservaciones_3p','comentarios_3p','notificaciones_3p','compromisos_3p','sancion_3p','matricula_condicional_3p','remision_comite_convivencia_3p','remision_consejo_academico_3p','cancelacion_matricula_3p','remision_orientacion_3p',
		//TERCER PERIODO TIPO DE NOTA
		'totalobservaciones_4p','comentarios_4p','notificaciones_4p','compromisos_4p','sancion_4p','matricula_condicional_4p','remision_comite_convivencia_4p','remision_consejo_academico_4p','cancelacion_matricula_4p','remision_orientacion_4p'
		
	));
			
	/*
		// SANCIONES
		$totalsanciones3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 4)->count();
		//$totalmatriculacondicional = Observer::where('observer_type_id', '=', 5)->count();
		
		$totalobservacionesacudientes = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_type_id', '=', 4)->count();
		$totalobservacionesestudiantes = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->count();		
		
		$count_observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->orderBy('course_id','ASC')->paginate(50);
		//dd($count_observations);
		//$matriculacondicional = Observer::whereBetween('created_at')->count();

	*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

		//$rol = User::find($id)->pluck('role_id');
		//dd($course);	
		
		//$users = User::OrderBy('name','ASC')->pluck('name','id');
		
		//$users = User::with('roles')->where('roles.role_id','4')->pluck('name','id');

		// $users = User::find(1);
		//         foreach ($users->roles as $role) {
		//         echo $role->pivot->create;
		// }

		//$users = User::OrderBy('full_name','DES')->pluck('full_name','id');
		//$users = User::lists('full_name', 'id');
		
		//$users = User::select(User::raw("CONCAT('firstname','lastname') AS fullname"),'id')->get()->pluck('fullname','id');
		
	//     $users = User::with(['user'=> function($q){

	//         $q->select([
	//             id,
	//             DB::raw("users.firstname,' ',users.lastname)  AS fullname")
	//         ]);

	// }])->get();

		// $first = DB::table('users')
		//     ->whereNull('firstname');

		// $users = DB::table('users')
		//     ->whereNull('lastname')
		//     ->union($first)
		//     ->get();

		//$users = User::selectRaw("CONCAT(lastname, ' ', firstname) as fullName")->get()->pluck('lastname','id');
		//    print_r($users);		
		
		// $observertypes = Observertype::orderBy('id', 'ASC')->pluck('name','id');

		// return view('admin.observer.create');
	}
	
	public function crearObservacion($id){
		$user_id = User::find($id);
		$observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
		$observercategories = Observercategory::orderBy('id', 'ASC')->pluck('name','id');
		$observernotes = Observernote::orderBy('id', 'ASC')->pluck('name','id');
		$observercodes = Observercode::orderBy('name', 'ASC')->pluck('description','id');
		//$observercodes = Observercode::select("observercodes.*"
		//,DB::raw("CONCAT(observercodes.name,' ',observercodes.description) as observercodes"))
        //	->pluck();
		//print_r($observercodes);
		
		//$sql = "SELECT * FROM articles WHERE id_author = $id";
		//$idobservation = SELECT setval('observation_id_seq', (SELECT MAX(id) from "observations"));
		//$idobservation = "SELECT setval(pg_get_serial_sequence('observations', 'id'), coalesce(max(id),1), false) FROM observations";
		//$idobservation = "SELECT setval('observations_id_seq', (SELECT MAX(id) FROM observations))";
		
		$current_id = DB::table('observations')->max('id');
		$new_id = $current_id + 1;
		//dd($new_id);
		
		$creator = Auth::id();
		$creator_role_id = User::where('id', $creator)->pluck('role_id', 'id')->first();
		
		return view('admin.observer.create',compact('new_id','user_id','observercategories', 'observerscenes','observercodes','observernotes', 'creator', 'creator_role_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ObserverStoreRequest $request)
	{
		//$observer = Observer::create($request->all());
		//Validar datos
		$request->validate([
			'new_id' => 'required',
			'observation' => 'required',
			'user_id' => 'required',
			'course_id' => 'required',
			'user_role_id' => 'required',
			'creator_id' => 'required',
			'creator_role_id' => 'required',
			'observer_scene_id' => 'required',
			'observer_category_id' => 'required',
			'observer_note_id' => 'required',
			'observer_code_id' => 'required',
			//'state' => 'required',
			]);

			//Guardar los datos
		 	$observer = Observer::create([
	 		'id'=>$request->new_id,
			'user_id'=>$request->user_id,
			'course_id'=>$request->course_id,
			'user_role_id'=>$request->user_role_id,
			'creator_id'=>$request->creator_id,
			'creator_rol_id'=>$request->creator_role_id,
			'observer_category_id'=>$request->observer_category_id,
			'observer_code_id'=>$request->observer_code_id,
			'observer_scene_id'=>$request->observer_scene_id,
			'observer_note_id'=>$request->observer_note_id,
			'observation'=>$request->observation,
			// 'state'=>$request->state,
			
		]);
		
		 return redirect()->route('observer.show', $observer->id)->with('info', '¡La observación ha sido creada con éxito!');
		 //->with('info', 'Observación creada con éxito');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) 
	{
		$observation = Observer::find($id);

		return view('admin.observer.show', compact('observation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	
	 public function edit($id)
	{
		$observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
		$observercategories = Observercategory::orderBy('id', 'ASC')->pluck('name','id');
		$observernotes = Observernote::orderBy('id', 'ASC')->pluck('name','id');
		$observercodes = Observercode::orderBy('id', 'ASC')->pluck('description','id');
		
		
		$observation = Observer::find($id);
		//$user_id = Observer::find($id);
		
		$estudiante = Observer::where('id', $id)->pluck('user_id', 'id')->first();
		// $user_id = User::where('id', $creator)->pluck('role_id', 'id')->first();
		$user_id = User::find($estudiante);
		$courses = Course::orderBy('id', 'ASC')->pluck('name','id');
		
		//return view('admin.observer.create',compact('user_id','user_role_id','observercategories', 'observerscenes','observercodes','observernotes', 'creator'));
		
		//$observation = Observer::find($id);
		//$users = User::OrderBy('name','DES')->pluck('name','id');
		//$courses = Course::orderBy('id', 'ASC')->pluck('name','id');
		//$observertypes = Observertype::orderBy('id', 'ASC')->pluck('name','id');
		//$observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
		//$observercategories = Observercategory::orderBy('id', 'ASC')->pluck('name','id');
		//$observernotes = Observernote::orderBy('id', 'ASC')->pluck('name','id');
		//$observercodes = Observercode::orderBy('id', 'ASC')->pluck('description','id');
		//$creator = User::find($id);

		return view('admin.observer.edit',compact('user_id','observercategories', 'observerscenes','observercodes','observernotes', 'observation', 'creator_role_id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ObserverUpdateRequest $request, $id)
	{   
		//Validar datos
		$request->validate([
			'observation' => 'required',
			'course_id' => 'required',
			
			'observer_scene_id' => 'required',
			'observer_category_id' => 'required',
			'observer_note_id' => 'required',
			'observer_code_id' => 'required',
			//'state' => 'required',
		]);
		// Actualizar los datos
		$observation = Observer::find($id);
		$observation->observation = $request->observation;
		$observation->course_id = $request->course_id;
		//$observation->rol_id = $request->rol_id;
		
		//$observation->observer_type_id = $request->observer_type_id;
		$observation->observer_scene_id = $request->observer_scene_id;
		$observation->observer_category_id = $request->observer_category_id;
		$observation->observer_note_id = $request->observer_note_id;
		$observation->observer_code_id = $request->observer_code_id;
		//$observation->state = $request->state;
		$observation->save();
		return redirect()->route('observer.show', $observation->id)->with('info', '¡La observación ha sido editada con éxito!');

	}
	public function destroy($id)
	{
		Observer::find($id)->delete();

		return back()->with('info', 'Registro eliminado correctamente');
	}
	
	public function unactive(Request $request)
	{ 
		$observation = Observer::findOrFail($request->$id);
		$observation->state = '0';
		$observation->save();
	}	
	
	public function active(Request $request)
	{ 
		$observation = Observer::findOrFail($request->$id);
		$observation->state = '1';
		$observation->save();
	}	

	public function observerStudent($id)
	{
		// Primer periodo
		$ini_1p = date('2018-02-01 00:00:00');
		$end_1p = date('2018-04-06 23:59:59');
		// Segundo periodo
		$ini_2p = date('2018-04-07 00:00:00');
		$end_2p = date('2018-06-08 23:59:59');
		// Tercero periodo
		$ini_3p = date('2018-06-09 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		// Cuarto periodo
		$ini_4p = date('2018-09-15 00:00:00');
		$end_4p = date('2018-11-30 23:59:59');

		$totalobservaciones = Observer::where('user_id', '=', $id)->count();
		$observations1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations = Observer::where('user_id', '=', $id)->orderBy('id','DES')->get();
		$estudiante = User::where('id', '=', $id)->pluck('name','id')->first();
		$idestudiante = User::find($id);
		//$observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
		//dd($estudiante);
		//dd($totalobservaciones);
		return view('admin.observerstudent.index', compact('estudiante', 'idestudiante', 'observations', 'observations1p', 'observations2p', 'observations3p', 'observations4p', 'totalobservaciones'));
		
	}
	
	public function miobservador()
	{
		$id = Auth::id();
		// Primer periodo
		$ini_1p = date('2018-02-01 00:00:00');
		$end_1p = date('2018-04-06 23:59:59');
		// Segundo periodo
		$ini_2p = date('2018-04-07 00:00:00');
		$end_2p = date('2018-06-08 23:59:59');
		// Tercero periodo
		$ini_3p = date('2018-06-09 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		// Cuarto periodo
		$ini_4p = date('2018-09-15 00:00:00');
		$end_4p = date('2018-11-30 23:59:59');

		$totalobservaciones = Observer::where('user_id', '=', $id)->count();
		$observations1p = Observer::whereBetween('created_at', [$ini_1p, $end_1p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations2p = Observer::whereBetween('created_at', [$ini_2p, $end_2p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations3p = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations4p = Observer::whereBetween('created_at', [$ini_4p, $end_4p])->where('user_id', '=', $id)->orderBy('created_at', 'DES')->get();
		$observations = Observer::where('user_id', '=', $id)->orderBy('id','DES')->get();
		$estudiante = User::where('id', '=', $id)->pluck('name','id')->first();
		$idestudiante = User::find($id);
		//$observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
		//dd($estudiante);
		//dd($totalobservaciones);
		return view('miobservador.index', compact('estudiante', 'idestudiante', 'observations', 'observations1p', 'observations2p', 'observations3p', 'observations4p', 'users', 'totalobservaciones'));
		
	}
	
	public function comentarios()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 1)->paginate(20);
		$total_comentarios = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 1)->count();

		return view('admin.observer.comentarios', compact('observations', 'total_comentarios'));
	}
	public function notificaciones()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 2)->paginate(20);
		$total_notificaciones = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 2)->count();

		return view('admin.observer.notificaciones', compact('observations', 'total_notificaciones'));
	}
	public function compromisos()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 3)->paginate(20);
		$total_compromisos = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 3)->count();

		return view('admin.observer.compromisos', compact('observations', 'total_compromisos'));
	}
	public function sanciones()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 4)->paginate(20);
		$total_sanciones = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 4)->count();

		return view('admin.observer.sanciones', compact('observations', 'total_sanciones'));
	}
	public function comite_convivencia()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 6)->paginate(20);
		$total_comite_convivencia = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 6)->count();

		return view('admin.observer.comite_convivencia', compact('observations', 'total_comite_convivencia'));
	}
	public function consejo_academico()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 7)->paginate(20);
		$total_consejo_academico = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 7)->count();

		return view('admin.observer.consejo_academico', compact('observations', 'total_consejo_academico'));
	}
	public function matricula_condicional()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 5)->paginate(20);
		$totalobservations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 5)->count();

		return view('admin.observer.matricula_condicional', compact('observations', 'totalobservations'));
	}
	public function cancelacion_matricula()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 8)->paginate(20);
		$totalobservations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 8)->count();

		return view('admin.observer.cancelacion_matricula', compact('observations', 'totalobservations'));
	}
	public function remision_orientacion()
	{
		// Tercer periodo
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		$observations = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 9)->paginate(20);
		$total_remision_orientacion = Observer::whereBetween('created_at', [$ini_3p, $end_3p])->where('observer_note_id', '=', 9)->count();

		return view('admin.observer.remision_orientacion', compact('observations', 'total_remision_orientacion'));
	}
	public function micurso()
	{
		$ini_3p = date('2018-06-12 00:00:00');
		$end_3p = date('2018-09-14 23:59:59');
		
		$creator = Auth::id();
		$curso = User::where('id', $creator)->pluck('course', 'id')->first();
		//$estudiantes = DB::table('users')
		//	->where('role_id', '=', 5)
		//	->where('course', '=', $curso)
		//	->orderBy('name', 'ASC')
		//	->get();
		
		//$observaciones = User::findOrFail()->observaciones->where("observer_code_id", "=", 3);
		
		$estudiantes = DB::table('users')
            ->join('observations', 'users.id', '=', 'observations.user_id')
            ->where('role_id', '=', 5)
            ->where('course', '=', $curso)
            //->count('observer_category_id', '=', 1)
            ->groupBy('user_id')
            ->orderBy('name', 'ASC')
            ->get();
        //dd($estudiantes);
    
    	//$temptable = DB::raw("(SELECT user_id, count(*) AS num_observations FROM observations GROUP BY user_id) as observations");
	
		//return DB::table('users')
		//	->join('observations', 'users.id', '=', 'observations.user_id')
		//	->select('users.id','users.name', 'observer_code_id')
		//	->leftJoin($temptable, 'observations.user_id', '=', 'users.id') 
		//	->where('role_id', '=', 5)
		//	->get();
		//dd($temptable);	    
    
    	//$users = User::join("roles","users.roles_id","=","roles.id")
    	//->where('users.estado','=',1)
    	//->get();
		
		//dd($estudiantes);
		
		$totalobservaciones = Observer::where('course_id', '=', $curso)->count();
		$totalsanciones = Observer::where('course_id', '=', $curso)->where('observer_type_id', '=', 5)->count();
		$totalobservacionesacudientes = Observer::where('course_id', '=', $curso)->where('observer_type_id', '=', 4)->count();
		$observations = Observer::where('course_id', '=', $curso)->orderBy('id','DES')->paginate(10);
		//dd($observations);

		return view('admin.observer.micurso.index', compact('curso', 'estudiantes', 'totalobservaciones', 'observations'));
		
	}
}