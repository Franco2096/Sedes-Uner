<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Presupuestos;
use App\Solicitud;
use App\Determinaciones;
use App\User;
use App\Presupuesto_Determinacion;
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
            ->join('clientes', 'clientes.id', '=', 'solicitudes.cliente_id')
            ->select('presupuestos.id','presupuestos.fecha as fecha_presupuesto','presupuestos.TotalPresupuestado as totalPresupuesto','presupuestos.estado as estado', 'solicitudes.tipo_servicio as tipo_servicio','solicitudes.fecha  as fecha_solicitud','clientes.nombre as nombreCliente','clientes.apellido as apellidoCliente' )
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
        $solicitud = Solicitud::all();
        $determinaciones = Determinaciones::all();
        return view('presupuesto.create',compact('usuario','solicitud','determinaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  public function store(Request $request){

    $ultimoId = Presupuestos::create([
                'solicitud_id' => $request['idsolicitud'],
                'fecha' =>  date('Y-m-d H:i:s'),
                'estado' => 'En_espera',
                'TotalPresupuestado' => $request['eltotal'],
    ]);
    //dd($request->idPersonal);
    //   $deter = (double)$request->idPersonal[0];
    //   dd($deter);
// dd($ultimoId->id);
// dd($request->idCant);
    for ($i=0; $i < count($request->idCant) ; $i++) {


        Presupuesto_Determinacion::create([
                    'presupuesto_id' => $ultimoId->id,
                    'valorDeterminacion' =>  (double)$request->idDeterminacion[$i],
                    'valorServicio' => (double)$request->idServicio[$i],
                    'valorPersonal' => (double)$request->idPersonal[$i],
                    'cantidad' => (int)$request->idCant[$i],
                    'determinacion_id' => (int)$request->id[$i],

        ]);
    }


    //Hasta aca funciona de maravisha

        // $hola = count($hola);
        return Redirect::to('/presupuestos');
  }

        // dd($request);


    //   dd($request->punto);

    //  Session::flash('message','Presupuesto Creado Correctamente');
    //   return redirect('/presupuestos');


   /* public function store(Request $request)
    {

      $data = array();
          foreach($_POST as $key => $value) {  //Recibo el los valores por POST
            $data[$key] = $value;
         }

         $acturl = urldecode($data['ListaPro']); //decodifico el JSON

         $productos = json_decode($acturl);

          foreach ($productos  as $pro) {
            $misProductos = array(
                'cantidad' => $pro->cantidad,
                'productoId' => $pro->id_pro,//así llamamos al id del producto en la vista en la funcion RefrescaProducto
                'precio' => $pro->precio,
                'total' =>$pro->total
            );
}
       // dd($misProductos);



      /*
      dd(decodeURIComponent($_POST['ListaPro']));
      Presupuestos::create([

          'descripcion' => $request['descripcion'],
          'estado' => $request['estado'],
          'fecha_emision' => $request['fecha_emision'],
          'solicitud_id' => $request['solicitud_id'],
          'usuario_id' => Auth::user()->id,
      ]);
      Session::flash('message','Presupuesto Creado Correctamente');
      return redirect('/presupuestos');
}*/

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
