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

        if (empty(trim($request['nombre']))||empty(trim($request['apellido']))|| empty(trim($request['dni']))||empty(trim($request['pais']))|| empty(trim($request['provincia']))|| empty(trim($request['ciudad']))|| empty(trim($request['direccion']))|| empty(trim($request['email']))||empty(trim($request['empresa']))||empty(trim($request['estado']))){

             Session::flash('message','El cliente no fue creado porque no se completaron correctamente los campos');
             return redirect('/clientes');
       
           }
            else{
        Clientes::create([

            'nombre' => $request['nombre'],
            'apellido'=> $request['apellido'],
            'dni' => $request['dni'], 
            'pais'=> $request['pais'],
            'provincia' => $request['provincia'],
            'ciudad' => $request['ciudad'],
			'direccion' => $request['direccion'],
			'email' => $request['email'],
            'empresa'=> $request['empresa'],
            'estado' => $request['estado']
            ]);

       
        Session::flash('message','Cliente Creado Correctamente');
        return redirect('/clientes');
    }
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
        if (empty(trim($request['nombre']))||empty(trim($request['apellido']))|| empty(trim($request['dni']))||empty(trim($request['pais']))|| empty(trim($request['provincia']))|| empty(trim($request['ciudad']))|| empty(trim($request['direccion']))|| empty(trim($request['email']))||empty(trim($request['empresa']))||empty(trim($request['estado']))){

             Session::flash('message','El cliente no fue editado porque no se completaron correctamente los campos');
             return redirect('/clientes');
       
           }
           else{
        $clientes = Clientes::find($id);
        $clientes->fill($request->all());
        $clientes->save();
        Session::flash('message','Cliente Editado Correctamente');
        return Redirect::to('/clientes');
    }
}

    public function destroy($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        Session::flash('message','Cliente Eliminado Correctamente');
        return Redirect::to('/clientes');
    }
}

