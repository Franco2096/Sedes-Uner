<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Analisis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class analisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $analisis = Analisis::paginate(10);
      return view('analisis.index',compact('analisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('analisis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Analisis::create([
          'nombre' => $request['nombre'],
          'descripcion' => $request['descripcion'],
          'operativo' => $request['operativo'],
          'precio' => $request['precio'],
          'tipo' => $request['tipo'],
          ]);
      Session::flash('message','Analisis Creado Correctamente');
      return redirect('/analisis');
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
      $analisis = Analisis::find($id);
      return view('analisis.edit',['analisis'=>$analisis]);
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
      $analisis = Analisis::find($id);
      $analisis->fill($request->all());
      $analisis->save();
      Session::flash('message','Analisis Editado Correctamente');
      return Redirect::to('/analisis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $analisis = Analisis::find($id);
      $analisis->delete();
      Session::flash('message','Analisis Eliminado Correctamente');
      return Redirect::to('/analisis');
    }
}
