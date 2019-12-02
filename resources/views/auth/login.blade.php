@extends('layouts.master')
@section('titulo',"Login")

@section('contenido')
<body class="hold-transition login-page">  
  <div class="login-box">
    <div class="login-logo">
      <img src="{{ asset('img/logo.png') }}" alt="CorpoTurismo" width="150px">
      <a href="#"><b>Corpo</b>Turismo</a>
    </div>
      @if(count($errors))
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)  
                    {{$error}}
                  @endforeach
                </div>
            </div>
        </div> 
      @endif
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">¡Bienvenido a la pagina de Corpoturismo!</p>

      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
@endsection