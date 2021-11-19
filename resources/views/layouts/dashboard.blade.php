@extends('layouts.master')
@section('contenido')
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper"  id="app">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Corpo</b>Turismo</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">
                {{ Auth::user()->persona->nombres }} 
                {{ Auth::user()->persona->apellidos }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->rol->dsc }}  
                  <small>CI V-{{ Auth::user()->persona->cedula }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Salír') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            {{ Auth::user()->persona->nombres }} 
            {{ Auth::user()->persona->apellidos }}
          </p>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de navegación</li>

        <li class="{{ request()->is('home') ? 'active' : '' }}">
          <a href="{{ route('home') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>

        @if(Auth::user()->rol_id == 1)
        <li class="{{ request()->is('cargos*') ? 'active' : '' }}">
          <a href="{{ route('cargos.index') }}">
            <i class="fa fa-user"></i> <span>Cargos</span>
          </a>
        </li>
        

        <li class="{{ request()->is('usuarios*') ? 'active' : '' }}">
          <a href="{{ route('usuarios.index') }}">
            <i class="fa fa-user"></i> <span>Usuarios</span>
          </a>
        </li>
        @endif
        
        <li class="{{ request()->is('solicitud*') ? 'active' : '' }}">
          <a href="{{ route('solicitud.index') }}">
            <i class="fa fa-file-text"></i> <span>Solicitudes</span>
          </a>
        </li>

        @if(Auth::user()->rol_id == 1 OR Auth::user()->rol_id == 2)
        <li class="treeview {{ request()->is('tramites*') ? 'active' : '' }} {{ request()->is('revisado*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-list"></i> <span>Trámites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
                <a href="{{ route('tramites.index') }}">
                    <i class="fa fa-circle-o"></i> Pendientes
                </a>
            </li>
            <li class="">
                <a href="{{ route('revisados.index') }}">
                    <i class="fa fa-circle-o"></i> Revisados
                </a>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{-- Dashboard --}}
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>  @yield('titulo')</a></li>
        {{-- <li class="active">Módulo</li> --}}
      </ol>

      @if(session('info'))
      <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-success">{{session('info')}}</div>
          </div>
      </div> 
      @endif
      
      @if(count($errors))
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)  
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>
                </div>
            </div>
        </div> 
      @endif
    </section>
    <!-- Main content -->
    <section class="content">
     @yield('recuadro')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">Corporación de turismo</a>.</strong> Todos los derechos reservado.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@endsection