<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Muestra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MuestraController extends Controller
{
    
    public function index()
    {
        $muestras = Muestra::paginate(10);
        
        return view('muestras.index',compact('muestras'));
    }

    
    public function create()
    {
       return view('muestras.create');
    }

  
    public function store(Request $request)
    {
        Muestra::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'presupuesto_id' => $request['presupuesto_id'],
            'estado' => $request['estado'],
            'fecha_ingreso' => $request['fecha_ingreso'],
           
            ]);
        Session::flash('message','Muestra Creada Correctamente');
        return redirect('/muestras');    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $muestras = Muestra::find($id);
        return view('muestras.edit',['muestras'=>$muestras]);
    }


    public function update(Request $request, $id)
    {
        $muestras = Muestra::find($id);
        $muestras->fill($request->all());
        $muestras->save();
        Session::flash('message','Muestra Editada Correctamente');
        return Redirect::to('/muestras');
    }

   
    public function destroy($id)
    {
        $muestras = Muestra::find($id);
        $muestras->delete();
        Session::flash('message','Muestra Eliminada Correctamente');
        return Redirect::to('/muestras');
    }

}