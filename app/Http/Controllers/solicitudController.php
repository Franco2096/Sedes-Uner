<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Solicitud;
use App\Clientes;
use App\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class solicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = DB::table('solicitudes')
            ->join('clientes', 'clientes.id', '=', 'solicitudes.cliente_id')
            ->join('users', 'users.id', '=', 'solicitudes.usuario_id')
            ->select('solicitudes.*', 'clientes.nombre', 'users.name')
            ->paginate(10);

        //$solicitudes = Solicitud::paginate(10);
        return view('solicitud.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cliente = Clientes::all()->pluck('nombre', 'id');

          return view('solicitud.create',['cliente'=> $cliente]);
         //return view('solicitud.create');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Solicitud::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'estado' => $request['tipoEstado'],
            'fecha' => date('Y-m-d'),
            'cliente_id' => $request['cliente_id'],
            'usuario_id' => Auth::user()->id,


            ]);
        Session::flash('message','Solicitud Creada Correctamente');
        return redirect('/solicitud');
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
        $cliente = Clientes::all()->pluck('nombre','id');

        $solicitud = Solicitud::find($id);
        /*$old = DB::table('solicitudes')
            ->join('clientes', 'clientes.id', '=', 'solicitudes.cliente_id')
            ->select('clientes.id as pepin','nombre')
            ->where('solicitudes.id', '=', $id)
            ->get();*/

       // $idcli = $solicitud[0]->cliente_id;
        return view('solicitud.edit',['solicitud'=>$solicitud],['cliente'=> $cliente]);
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

        
        $solicitud = Solicitud::find($id);
        $solicitud->fill($request->all());
        $solicitud->titulo = $request->titulo;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->cliente_id = $request->cliente_id;
        $solicitud->usuario_id = Auth::user()->id;
         

        $solicitud->save();
        Session::flash('message','Solicitud Editada Correctamente');
        return Redirect::to('/solicitud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $solicitud = Solicitud::find($id);
      $solicitud->delete();
      Session::flash('message','Solicitud Eliminada Correctamente');
      return Redirect::to('/solicitud');
    }
    
}
