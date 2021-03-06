@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="row">
         
            <ul class="nav nav-pills flex-column">




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
                    <li class="nav-item" >
                        <a class="nav-link"   href="{!! URL::to('/usuarios') !!}">Reportes</a>
                    </li>

                @else

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
                    <li class="nav-item" >
                        <a class="nav-link"   href="{!! URL::to('/usuarios') !!}">Reportes</a>
                    </li>

                @endif

            </ul>

        

          <!--<main class="row">
                @yield('tabla')
          </main> -->
      </div>
</div>




       {{-- <div class="container">
          @yield('tabla')
       </div> --}}



@stop
