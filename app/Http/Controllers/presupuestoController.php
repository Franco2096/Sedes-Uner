<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Presupuestos;
class presupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $presupuestos = Presupuestos::paginate(10);
      return view('presupuesto.index',compact('presupuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user()->name;

        return view('presupuesto.create',compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Presupuestos::create([
          'descripcion' => $request['descripcion'],
          'estado' => $request['estado'],
          'fecha_emision' => $request['fecha_emision'],
          'solicitud_id' => $request['solicitud_id'],
          'usuario_id' => Auth::user()->id,
      ]);
      Session::flash('message','Presupuesto Creado Correctamente');
      return redirect('/presupuestos');
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
      $presupuestos = Presupuestos::find($id);
      return view('presupuestos.edit',['presupuestos'=>$presupuestos]);
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
      $presupuestos = Presupuestos::find($id);
      //$presupuestos->fill($request->all());

      $presupuestos->descripcion = $request->descripcion;
      $presupuestos->estado = $request->estado;
      $presupuestos->fecha_emision = $request->fecha_emision;
      $presupuestos->solicitud_id = $request->solicitud_id;
      $presupuestos->usuario_id=Auth::user()->id;

      $presupuestos->save();
      Session::flash('message','Presupuesto Editado Correctamente');
      return Redirect::to('/presupuestos');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $presupuestos = Presupuestos::find($id);
      $presupuestos->delete();
      Session::flash('message','Presupuesto Eliminado Correctamente');
      return Redirect::to('/presupuestos');
    }
}
