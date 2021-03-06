<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()->rol == 'admin'){
        $usuarios = User::paginate(10);
        return view('users.index',compact('usuarios'));}

        else{
        Session::flash('message', 'Usted no tiene acceso a esta parte del sistema');
        return Redirect::to('/home');
       
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->rol == 'admin'){
            return view('users.create');
        }
        else {
            Session::flash('message','Usted no es usuario Administrador');
            return redirect('/usuarios');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'tipoUser' => $request['tipoUser'],


            ]);
        Session::flash('message','Usuario Creado Correctamente');
        return redirect('/usuarios');
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
        if (Auth::user()->rol == 'admin'){
            $usuario = User::find($id);
            return view('users.edit',['usuario'=>$usuario]);
        }
        else {
            Session::flash('message','Usted no es usuario Administrador');
            return redirect('/usuarios');
        }


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
        $usuarios = User::find($id);
        $usuarios->fill($request->all());
        $usuarios->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->rol == 'admin'){
            $usuarios = User::find($id);
            $usuarios->delete();
            Session::flash('message','Usuario Eliminado Correctamente');
            return Redirect::to('/usuarios');
        }
        else {
            Session::flash('message','Usted no es usuario Administrador');
            return redirect('/usuarios');
        }

    }
}
