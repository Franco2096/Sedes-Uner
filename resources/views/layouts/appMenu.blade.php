@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-pills flex-column">
<<<<<<< HEAD
=======




>>>>>>> master
                @if (Auth::user()->rol == 'admin')

                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/usuarios') !!}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/determinaciones') !!}">Determinaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/clientes') !!}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/solicitud') !!}">Solicitud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/presupuestos') !!}">Presupuestos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/muestras') !!}">Muestras</a>
                    </li>
                @else

<<<<<<< HEAD
                     <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/analisis') !!}">Analisis</a>
=======
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/determinaciones') !!}">Determinaciones</a>
>>>>>>> master
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/clientes') !!}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/solicitud') !!}">Solicitud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/presupuestos') !!}">Presupuestos</a>
                    </li>

                @endif

            </ul>

                <ul class="nav nav-pills flex-column ">

                    <li class="nav-item" >
                        <a class="nav-link"   href="{!! URL::to('/usuarios') !!}">Reportes</a>
                </li>

            </ul>

          <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                @yield('tabla')
          </main>
      </div>
</div>




       {{-- <div class="container">
          @yield('tabla')
       </div> --}}



@stop
