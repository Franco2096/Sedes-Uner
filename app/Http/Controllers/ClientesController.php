<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Clientes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;





class ClientesController extends Controller
{
    public function index()
    {
//        
        $clientes = Clientes::paginate(10);
      
        return view('clientes.index',compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }
    public function store(Request $request)
    {

        Clientes::create([

            'nombre' => $request['nombre'],

            'dni' => $request['dni'],
            'provincia' => $request['provincia'],
            'ciudad' => $request['ciudad'],
			'direccion' => $request['direccion'],
			'email' => $request['email'],
            ]);

       
        Session::flash('message','Cliente Creado Correctamente');
        return redirect('/clientes');
    }
     public function show($id)
    {
        //
    }
      public function edit($id)
    {
        $clientes = Clientes::find($id);
        return view('clientes.edit',['clientes'=>$clientes]);
    }

    public function update(Request $request, $id)
    {
        $clientes = Clientes::find($id);
        $clientes->fill($request->all());
        $clientes->save();
        Session::flash('message','Cliente Editado Correctamente');
        return Redirect::to('/clientes');
    }

    public function destroy($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        Session::flash('message','Cliente Eliminado Correctamente');
        return Redirect::to('/clientes');
    }
}

