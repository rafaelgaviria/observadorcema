<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ObserverStoreRequest;
use App\Http\Requests\ObserverUpdateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;

use App\Observer;
//Use App\Level;
Use App\Course;
Use App\Subject; 
Use App\User; 
Use App\Observerscene; 
Use App\Observercategory; 
Use App\Observercode; 
Use App\Observernote; 
Use App\Observertype; 
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
        //$users = User::all();
        $estudiantes = User::where("role_id","=",5)->get();

        $userobservations = DB::table('users')
            ->join('observations', function($join)
                {
                    $join->on('users.id', '=', 'observations.user_id')
                        ->where('role_id', '=', 5);
                })
                //->pluck('observer_type_id' );
                ->groupBy('course_id')
            ->get();
            
        //dd($userobservations);

        
        // DB::table('users')
        //     ->join('contacts', function($join)
        //     {
        //         $join->on('users.id', '=', 'contacts.user_id')
        //             ->where('contacts.user_id', '>', 5);
        //     })
        //     ->get();

        //$observacionporcursos = Observer::Sum('id')->groupBy('course_id')->get();
        $totalobservaciones = Observer::all('id')->count();
        
        $category1 = Observer::where("observer_category_id","=",1)->count();
        $category2 = Observer::where("observer_category_id","=",2)->count();
        $category3 = Observer::where("observer_category_id","=",3)->count();
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



        $obsdecursos = DB::table('observations')
                    //->join('courses', 'course_id', '=', 'observation.course_id')
                    ->select(DB::raw('count(*) as obs_count, course_id'))
                    //->where('status', '<>', 1)
                    ->groupBy('course_id')
                    ->get();
        
        //$roles = Role::all();
        //$users = User::all()->roles()->orderBy('name')->get();
        
        // $levels = Level::orderBy('id', 'DESC')->get();
        // $courses = Course::orderBy('id', 'DESC')->get();
        // $subjects = Subject::orderBy('id','asc')->paginate(15);
        $observations = Observer::orderBy('id','DES')->paginate();
        
        //One of the most popular way of debugging in PHP still remains the same – showing variables in the browser:
        //Opción 1
        //dd($observations);
        //Opción 2 - Después de ver el resultado hacer Ctl + U para verlos ordenados
        //var_dump($observations);
        //die();
        //Opción 3
        //print_r($observations);

        return view('admin.observer.index', compact('estudiantes','users','observations', 'roles', 'users', 'totalobservaciones', 'tipo1', 'tipo2', 'tipo3', 'observacionporcursos', 'totalobservations', 'obsdecursos', 'obs_count', 'category1', 'category2', 'category3', 'userobservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::OrderBy('name','ASC')->pluck('name','id');
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
        
        //dd($users);
        
        
        $courses = Course::orderBy('id', 'ASC')->pluck('name','id');
        $observertypes = Observertype::orderBy('id', 'ASC')->pluck('name','id');
        $observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
        $observercategories = Observercategory::orderBy('id', 'ASC')->pluck('name','id');
        $observernotes = Observernote::orderBy('id', 'ASC')->pluck('name','id');
        $observercodes = Observercode::orderBy('id', 'ASC')->pluck('description','id');
        $creator = Auth::id();
        
        
        return view('admin.observer.create',compact('users','courses','observercategories', 'observertypes', 'observerscenes','observercodes','observernotes', 'creator'));

        // return view('admin.observer.create');
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
            //'rol_id' => 'required',
            'creator_id' => 'required',
            'observer_type_id' => 'required',
            'observer_scene_id' => 'required',
            'observer_category_id' => 'required',
            'observer_note_id' => 'required',
            'observer_code_id' => 'required',
            'state' => 'required',
            ]);
            //Guardar los datos

         $observer = Observer::create([
            'observation'=>$request->observation,
            'user_id'=>$request->user_id,
            'course_id'=>$request->course_id,
            //'rol_id'=>$request->rol_id,
            'observer_type_id'=>$request->observer_type_id,
            'creator_id'=>$request->creator_id,
            'observer_scene_id'=>$request->observer_scene_id,
            'observer_category_id'=>$request->observer_category_id,
            'observer_note_id'=>$request->observer_note_id,
            'observer_code_id'=>$request->observer_code_id,
            'state'=>$request->state,
            
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
        $observation = Observer::find($id); $observation = Observer::find($id);

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
        $observation = Observer::find($id);
        $users = User::OrderBy('name','DES')->pluck('name','id');
        $courses = Course::orderBy('id', 'ASC')->pluck('name','id');
        $observertypes = Observertype::orderBy('id', 'ASC')->pluck('name','id');
        $observerscenes = Observerscene::orderBy('id', 'ASC')->pluck('name','id');
        $observercategories = Observercategory::orderBy('id', 'ASC')->pluck('name','id');
        $observernotes = Observernote::orderBy('id', 'ASC')->pluck('name','id');
        $observercodes = Observercode::orderBy('id', 'ASC')->pluck('description','id');
        $creator = User::find($id);
        
        return view('admin.observer.edit',compact('observation','users','courses','observercategories', 'observertypes', 'observerscenes','observercodes','observernotes', 'creator'));
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
            'user_id' => 'required',
            'course_id' => 'required',
            //'rol_id' => 'required',
            'creator_id' => 'required',
            'observer_type_id' => 'required',
            'observer_scene_id' => 'required',
            'observer_category_id' => 'required',
            'observer_note_id' => 'required',
            'observer_code_id' => 'required',
            'state' => 'required',
        ]);
        // Actualizar los datos
        $observation = Observer::find($id);
        $observation->observation = $request->observation;
        $observation->user_id = $request->user_id;
        $observation->course_id = $request->course_id;
        //$observation->rol_id = $request->rol_id;
        $observation->creator_id = $request->creator_id;
        $observation->observer_type_id = $request->observer_type_id;
        $observation->observer_scene_id = $request->observer_scene_id;
        $observation->observer_category_id = $request->observer_category_id;
        $observation->observer_note_id = $request->observer_note_id;
        $observation->observer_code_id = $request->observer_code_id;
        $observation->state = $request->state;
        $observation->save();
        return redirect()->route('observer.show', $observation->id)->with('info', '¡La observación ha sido editada con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Observer::find($id)->delete();

        return back()->with('info', 'Registro eliminado correctamente');
    }
}
