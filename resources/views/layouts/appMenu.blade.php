@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="row">
          <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">

                @if (Auth::user()->rol == 'admin')

                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/usuarios') !!}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/analisis') !!}">Analisis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/clientes') !!}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/solicitud') !!}">Solicitud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/presupuesto') !!}">Presupuestos</a>
                    </li>



                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::to('/analisis') !!}">Analisis</a>
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



          </nav>

          <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                @yield('tabla')
          </main>
      </div>
</div>




       {{-- <div class="container">
          @yield('tabla')
       </div> --}}



@stop
