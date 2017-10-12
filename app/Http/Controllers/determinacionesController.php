<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Determinaciones;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class determinacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $determinaciones = determinaciones::paginate(10);
        return view('determinaciones.index',compact('determinaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('determinaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Determinaciones::create([
            'determinacion' => $request['determinacion'],
            'tecnica' => $request['tecnica'],
            'tipo' => $request['tipo'],
            'estado' => $request['estado'],

            ]);
        Session::flash('message','Analisis Creado Correctamente');
        return redirect('/determinaciones');
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
        $determinacion = Determinaciones::find($id);
        return view('determinaciones.edit',['determinacion'=>$determinacion]);
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
        $determinacion = Determinaciones::find($id);
        $determinacion->fill($request->all());
        $determinacion->save();
        Session::flash('message','Analisis Editado Correctamente');
        return Redirect::to('/determinaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $determinacion = Determinaciones::find($id);
        $determinacion->delete();
        Session::flash('message','Analisis Eliminado Correctamente');
        return Redirect::to('/determinaciones');
    }
}
