@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{asset('css/backend.css')}}">
@endsection

@section('title', 'Iniciar Sesión')

@section('main')
<div class="wrapper">
	<h2>Iniciar sesión</h2>
	<form action="{{ route('login')}} " class="contenedorLogin" method="POST" accept-charset="UTF-8" autocomplete="off">
            
        {{ csrf_field() }}
		<div class="img"></div>
        <input type="text" 
                placeholder="Nombre de Usuario" 
                name="username" id="txtUsername" 
                value="{{ old('username') }}"
                required>
		<input type="Password" placeholder="Password" name="password" id="txtPass" required>
        <input type="submit" value="Iniciar sesión" name="submit">
        
        {!! $errors->first('username', '<span> :message </span>') !!}
        {!! $errors->first('password', '<span> :message </span>') !!}
	</form>		
</div>
@endsection