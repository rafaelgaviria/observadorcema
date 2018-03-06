<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ObserverStoreRequest;
use App\Http\Requests\ObserverUpdateRequest;

use App\Http\Controllers\Controller;

use App\Observer;
Use App\Level;
Use App\Course;
Use App\Subject; 

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
        $levels = Level::orderBy('id', 'DESC')->get();
        $courses = Course::orderBy('id', 'DESC')->get();
        $subjects = Subject::orderBy('id','asc')->paginate(15);
        $observations = Observer::orderBy('id','asc')->paginate(5);
        
        //One of the most popular way of debugging in PHP still remains the same – showing variables in the browser:
        
        //Opción 1
        //dd($observations);
        
        //Opción 2 - Después de ver el resultado hacer Ctl + U para verlos ordenados
        //var_dump($observations);
        //die();
        
        //Opción 3
        //print_r($observations);
        return view('admin.observer.index', compact('subjects','levels','courses', 'observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.observer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObserverStoreRequest $request)
    {
         $observer = Observer::create($request->all());

         return redirect()->route('admin.observer.index', $observer->id)
          ->with('info', 'Observación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $observer = Observer::find($id);

        return view('admin.observer.show', compact('$observer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observer = Observer::find($id);

        return view('admin.observer.edit', compact('$observer')); 
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
        $Observer = Observer::find($id);
        
        $Observer->fill($request->all())->save();

        return redirect()->route('admin.observer.index', $observer->id)
            ->with('info', 'Observación actualizada con éxito');
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
