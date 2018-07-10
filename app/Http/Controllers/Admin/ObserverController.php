<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ObserverStoreRequest;
use App\Http\Requests\ObserverUpdateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;

use App\Observer;
Use App\Level;
Use App\Course;
Use App\Subject; 
Use App\User; 
Use App\Observerscene; 
Use App\Observercategory; 
Use App\Observercode; 
Use App\Observernote; 
Use App\CourseUser; 
Use App\Role; 

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
		// LISTADO DE CURSOS
		$primeroestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 1)
			->orderBy('name', 'ASC')
			->get();
		$segundoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 2)
			->orderBy('name', 'ASC')
			->get();
		$terceroestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 3)
			->orderBy('name', 'ASC')
			->get();
		$cuartoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 4)
			->orderBy('name', 'ASC')
			->get();
		$quintoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 5)
			->orderBy('name', 'ASC')
			->get();
		$sextoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 6)
			->orderBy('name', 'ASC')
			->get();
		$septimoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 7)
			->orderBy('name', 'ASC')
			->get();
		$octavoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 8)
			->orderBy('name', 'ASC')
			->get();
		$novenoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 9)
			->orderBy('name', 'ASC')
			->get();
		$decimoestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 10)
			->orderBy('name', 'ASC')
			->get();
		$onceestudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', 11)
			->orderBy('name', 'ASC')
			->get();

			
		$primerototal = Observer::where("course_id","=",1)->count();
		$segundototal = Observer::where("course_id","=",2)->count();
		$tercerototal = Observer::where("course_id","=",3)->count();
		$cuartototal = Observer::where("course_id","=",4)->count();
		$quintototal = Observer::where("course_id","=",5)->count();
		$sextototal = Observer::where("course_id","=",6)->count();
		$septimototal = Observer::where("course_id","=",7)->count();
		$octavototal = Observer::where("course_id","=",8)->count();
		$novenototal = Observer::where("course_id","=",9)->count();
		$decimototal = Observer::where("course_id","=",10)->count();
		$oncetotal = Observer::where("course_id","=",11)->count();
		
		$users = User::all();	
		$totalobservaciones = Observer::all('id')->count();
		$totalsanciones = Observer::where('observer_type_id', '=', 5)->count();
		$totalobservacionesacudientes = Observer::where('observer_type_id', '=', 4)->count();
		//$totalobservacionesestudiantes = Observer::where('user_role_id', '=', 5)->count();
		
		$observations = Observer::orderBy('id','DES')->paginate(10);
		
		return view('admin.observer.index', compact('users','observations', 'totalobservaciones', 'totalsanciones', 'totalobservacionesacudientes', 'totalobservacionesestudiantes',
		//CONTEO DE OBSERVACIONES POR CURSO
		'primerototal','segundototal','tercerototal','cuartototal','quintototal','sextototal','septimototal','octavototal','novenototal','decimototal','oncetotal',	
		//LISTA DE ESTUDIANTES POR CURSO
		'primeroestudiantes','segundoestudiantes','terceroestudiantes','cuartoestudiantes','quintoestudiantes','sextoestudiantes','septimoestudiantes','octavoestudiantes','novenoestudiantes','decimoestudiantes','onceestudiantes'));
	}
	//$category1 = Observer::where("observer_category_id","=",1)->count();
	
	// $userobservations = DB::table('users')
	// 	->join('observations', function($join)
	// 		{
	// 			$join->on('users.id', '=', 'observations.user_id')
			// 								->where('role_id', '=', 5)
			// 								->where('course_id', '=', 1);
			// })
			//->pluck('observer_type_id' );
			//->groupBy('course_id')
					// ->get();
	
	// DB::table('users')
	//     ->join('contacts', function($join)
	//     {
	//         $join->on('users.id', '=', 'contacts.user_id')
	//             ->where('contacts.user_id', '>', 5);
	//     })
	//     ->get();

	//$observacionporcursos = Observer::Sum('id')->groupBy('course_id')->get();
	
	//$count = App\Flight::where('active', 1)->count();
	
		// $observacionporcursos = DB::observations('orders')
		//     ->select('department', DB::raw('SUM(price) as total_sales'))
		//     ->groupBy('department')
		//     ->havingRaw('SUM(price) > 2500')
		//     ->get();
		
		//$observacionporcursos = Observer::Sum('id')->where('estado', 'A')->groupBy('course_id')->get();
		//DB::table('name')->sum('column');

		// $observacionporcursos = Observer::Sum('observation')
		//     ->groupBy('course_id')
		//     ->get();

		// $orders = DB::table('orders')
		//     ->select('department', DB::raw('SUM(price) as total_sales'))
		//     ->groupBy('department')
		//     ->havingRaw('SUM(price) > 2500')
		//     ->get();
				
		// $observacionporcursos = DB::table('observations')
		//     ->select('course_id', DB::raw('SUM(id) as totalobservations'))
		//     ->groupBy('course_id')
		//     ->get();
		
		// $history = DB::table('users')
		//     ->join('adjustments', 'users.id', '=', 'adjustments.user_id')
		//     ->select('users.name', 'adjustments.*')
		//     ->where('remark_id', $operation->id)
		//    ->orderBy('updated_at','DESC')
		//     ->get();

		// $obsdecursos = DB::table('observations')
					//->join('courses', 'course_id', '=', 'observation.course_id')
					// ->select(DB::raw('count(*) as obs_count, course_id'))
					//->where('status', '<>', 1)
					// ->groupBy('course_id')
					// ->get();
	
		//$courses = Course::orderBy('id', 'ASC')->pluck('name','id');

		// $estudiantes = User::where("role_id","=",5)->get();
		//$users = User::all()->roles()->orderBy('name')->get();
		

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
		$observercodes = Observercode::orderBy('id', 'ASC')->pluck('description','id');
		//$observercodes = Observercode::select("observercodes.*"
		//,DB::raw("CONCAT(observercodes.name,' ',observercodes.description) as observercodes"))
        //	->pluck();
		//print_r($observercodes);
		
		$creator = Auth::id();
		$creator_role_id = User::where('id', $creator)->pluck('role_id', 'id')->first();
		
		return view('admin.observer.create',compact('user_id','observercategories', 'observerscenes','observercodes','observernotes', 'creator', 'creator_role_id'));
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
			'observation' => 'required',
			'user_id' => 'required',
			'course_id' => 'required',
			'user_role_id' => 'required',
			'creator_id' => 'required',
			'creator_rol_id' => 'required',
			'observer_scene_id' => 'required',
			'observer_category_id' => 'required',
			'observer_note_id' => 'required',
			'observer_code_id' => 'required',
			//'state' => 'required',
			]);

			//Guardar los datos
		 	$observer = Observer::create([
			'user_id'=>$request->user_id,
			'course_id'=>$request->course_id,
			'user_role_id'=>$request->user_role_id,
			'creator_id'=>$request->creator_id,
			'creator_rol_id'=>$request->creator_rol_id,
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
		
		$creator = Auth::id();
		$observation = Observer::find($id);
		//$user_id = Observer::find($id);
		
		$estudiante = Observer::where('id', $id)->pluck('user_id', 'id')->first();
		// $user_id = User::where('id', $creator)->pluck('role_id', 'id')->first();
		$user_id = User::find($estudiante);
		
		$creator_rol_id = User::where('id', $creator)->pluck('role_id', 'id')->first();

		$courses = Course::orderBy('id', 'ASC')->pluck('name','id');
		$creator_rol_id = User::where('id', $creator)->pluck('role_id', 'id')->first();
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

		return view('admin.observer.edit',compact('user_id','user_role_id','observercategories', 'observerscenes','observercodes','observernotes', 'creator', 'observation', 'creator_rol_id'));
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
			'creator_id' => 'required',
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
		$observation->creator_id = $request->creator_id;
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
		$totalobservaciones = Observer::where('user_id', '=', $id)->count();
		$observations = Observer::orderBy('id','DES')->where('user_id', '=', $id)->paginate(10);
		return view('admin.observerstudent.index', compact('observations', 'users', 'totalobservaciones'));
	}
	
	public function suspendidos()
	{
		//$suspendidos = Observer::where('user_id', '=', 436)->get();
		$observations = Observer::where('observer_type_id', '=', 5)->paginate(20);
		// dd($suspendidos);

		return view('admin.observer.suspendidos.index', compact('observations'));
	}
	public function micurso()
	{
		$creator = Auth::id();
		$curso = User::where('id', $creator)->pluck('course', 'id')->first();
		$estudiantes = DB::table('users')
			->where('role_id', '=', 5)
			->where('course', '=', $curso)
			->orderBy('name', 'ASC')
			->get();
		$totalobservaciones = Observer::where('course_id', '=', $curso)->count();
		$totalsanciones = Observer::where('course_id', '=', $curso)->where('observer_type_id', '=', 5)->count();
		$totalobservacionesacudientes = Observer::where('course_id', '=', $curso)->where('observer_type_id', '=', 4)->count();
		$observations = Observer::where('course_id', '=', $curso)->orderBy('id','DES')->paginate(10);
		//dd($observations);

		return view('admin.observer.micurso.index', compact('estudiantes', 'totalobservaciones', 'totalsanciones', 'totalobservacionesacudientes','observations'));
	}
}





