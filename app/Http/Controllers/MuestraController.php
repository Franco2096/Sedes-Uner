<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Muestra;
use App\Presupuestos;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuestraController extends Controller
{
    
    public function index()
    {
        if (Auth::user()->rol == 'admin'){
         $muestras = DB::table('muestra')
            ->join('presupuestos', 'muestra.presupuesto_id', '=', 'presupuestos.id')
            ->select('muestra.*',  'presupuestos.descripcion as des')
            ->paginate(10);

        
        return view('muestras.index',compact('muestras'));}

        else{
        Session::flash('message', 'Usted no tiene acceso a esta parte del sistema');
        return Redirect::to('/home');
       
        }
    }

    
    public function create()
    {
        $presupuesto = Presupuestos::all()->pluck('descripcion', 'id');
       return view('muestras.create',['presupuesto'=> $presupuesto]);
    }

  
    public function store(Request $request)
    {


        if (empty(trim($request['nombre']))|| empty(trim($request['descripcion']))|| empty(trim($request['presupuesto_id']))|| empty(trim($request['estado']))){

             Session::flash('message','La muestra no fue creada porque no se completaron correctamente los campos');
             return redirect('/muestras');
       
           }
            else{
        Muestra::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'presupuesto_id' =>$request['presupuesto_id'],
            'estado' => $request['estado'],
            'fecha_ingreso' => $request['fecha_ingreso'],
           
            ]);
        Session::flash('message','Muestra Creada Correctamente');
        return redirect('/muestras');    }

    }
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $presupuesto = Presupuestos::all()->pluck('descripcion', 'id');
        $muestras = Muestra::find($id);
        return view('muestras.edit',['muestras'=>$muestras,'presupuesto'=> $presupuesto,]);
    }


    public function update(Request $request, $id)
    {

        if (empty(trim($request['nombre']))|| empty(trim($request['descripcion']))|| empty(trim($request['presupuesto_id']))|| empty(trim($request['estado']))){

             Session::flash('message','La muestra no fue creada porque no se completaron correctamente los campos');
             return redirect('/muestras');
       
           }
        else{
            $muestras = Muestra::find($id);
            $muestras->fill($request->all());
            $muestras->save();
            Session::flash('message','Muestra Editada Correctamente');
            return Redirect::to('/muestras');
        }
    }

   
    public function destroy($id)
    {
        $muestras = Muestra::find($id);
        $muestras->delete();
        Session::flash('message','Muestra Eliminada Correctamente');
        return Redirect::to('/muestras');
    }

}