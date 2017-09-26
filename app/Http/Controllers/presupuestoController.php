<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Presupuestos;
use App\Solicitud;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class presupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $presupuestos = DB::table('presupuestos')
            ->join('solicitudes', 'solicitudes.id', '=', 'presupuestos.solicitud_id')
            ->join('users', 'users.id', '=', 'presupuestos.usuario_id')
            ->select('presupuestos.*', 'solicitudes.titulo', 'users.name')
            ->paginate(10);
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
        $solicitud = Solicitud::all()->pluck('titulo', 'id');

        return view('presupuesto.create',compact('usuario','solicitud'));
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
      $solicitud = Solicitud::all()->pluck('titulo','id');

      $usuario = User::all()->pluck('name','id');


     //$solicitud = Solicitud::all()->pluck('titulo', 'id');
       return view('presupuesto.edit',compact('presupuestos','usuario','solicitud'));
      
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
