@extends('layouts.app')

@section('content')
  <div class="navbar-default sidebar" role="navigation">
                  <div class="sidebar-nav navbar-collapse">
                      <ul class="nav" id="side-menu">
                          <li>
                              <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                  <li>
                                      <a href="{!! URL::to('/usuario/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                  </li>
                                  <li>
                                      <a href="{!! URL::to('/usuario') !!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                  </li>
                              </ul>
                          </li>

                          <li>
                              <a href="#"><i class="fa fa-film fa-fw"></i> Analista<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                  <li>
                                      <a href="{!! URL::to('/analista/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                  </li>
                                  <li>
                                      <a href="{!! URL::to('/analista') !!}"><i class='fa fa-list-ol fa-fw'></i> Analista</a>
                                  </li>
                              </ul>
                          </li>




                          <li>
                              <a href="#"><i class="fa fa-film fa-fw"></i> Pelicula<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                  <li>
                                      <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                  </li>
                                  <li>
                                      <a href="#"><i class='fa fa-list-ol fa-fw'></i> Peliculas</a>
                                  </li>
                              </ul>
                          </li>

                          <li>
                              <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                  <li>
                                      <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                  </li>
                                  <li>
                                      <a href="#"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                                  </li>
                              </ul>
                          </li>

                      </ul>
                  </div>
              </div>

       </nav>
       <div class="container">
          @yield('tabla')
       </div>



@stop
