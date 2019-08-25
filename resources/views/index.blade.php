@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'Inicio')

@section('main')
<div class="slider">
			
    <figure>
        
        <div class="img">
        
        <b><p class="hendu delay a">Estás pensando en Ganar</p></b>

        </div>

        <div class="img1">
            
            <h1 class="titulo delay a">HENDU CONSULTORA</h1>

        </div>

    </figure>

</div>

<div class="servicios">
    
    <h2>Nos ocupamos de tu campaña integralmente</h2>
    <h2 class="color">Sabemos como</h2>

</div>

<div class="texto">

    <div class="column">

        <p class="parrafo"><em>Estudiá TU contexto.</em></p>
        <img src="{{ asset('img/contexto.svg') }}" alt="">

    </div>

    <div class="column">

        <p class="parrafo"><em>Posicioná TU imagen.</em></p>
        <img src="{{ asset('img/imagen.svg') }}" alt="">

    </div>

    <div class="column">

        <p class="parrafo"><em>Lográ Imponerte.</em></p>
        <img src="{{ asset('img/imponerte.svg') }}" alt="">

    </div>

</div>

<div class="parallax">
    
    <h2>Transformá TU campaña y sé el GANADOR</h2>

</div>

<div class="redes">
    
    <h2>Seguinos en nuestras redes</h2>
    
    <div class="redesSociales">	

        <a href="https://twitter.com/HENDU2018" target="_blank"><div class="icono"><i class="fab fa-twitter"></i></div></a>

    </div>

</div>
@endsection

