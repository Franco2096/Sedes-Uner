@extends('layouts.appMenu')
@section('Abajobarra')
        @if(Session::has('message'))
            <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('message') }}
         </div>
        @endif
@endsection
@section('tabla')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    Usted esta conectado como: <strong>Administrador</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
