@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="row">
          <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">

              <li class="nav-item">
                <a class="nav-link" href="{!! URL::to('/usuarios') !!}">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!! URL::to('/analisis') !!}">Analisis</a>
              </li>
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
