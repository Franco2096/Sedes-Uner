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



        if (empty(trim($request['nombre'])) || empty(trim($request['dni']))|| empty(trim($request['provincia']))|| empty(trim($request['ciudad']))|| empty(trim($request['direccion']))|| empty(trim($request['email'])))   { 
             Session::flash('message','Cliente no creado porque no completo correctamente los campos');
             return view('clientes.create');
             
         
            }
        else
             {      

 
        Clientes::create([

            'nombre' => $request['nombre'],


            'dni' => $request['dni'],
            'provincia' => $request['provincia'],
            'ciudad' => $request['ciudad'],
			'direccion' => $request['direccion'],
			'email' => $request['email']
            ]);

        Session::flash('message','Cliente creado correctamente');

   
       

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
        if (empty(trim($request['nombre'])) || empty(trim($request['dni']))|| empty(trim($request['provincia']))|| empty(trim($request['ciudad']))|| empty(trim($request['direccion']))|| empty(trim($request['email'])))   { 
             Session::flash('message','Cliente no editado porque no completo correctamente los campos');
             $clientes = Clientes::find($id);
             return view('clientes.edit',['clientes'=>$clientes]);
             
         
            }
        else
             {      
        $clientes = Clientes::find($id);
        $clientes->fill($request->all());
        $clientes->save();
        Session::flash('message','Cliente editado correctamente');
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


