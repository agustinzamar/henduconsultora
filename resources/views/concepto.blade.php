@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/concepto.css') }}">
@endsection

@section('title', 'Concepto')

@section('main')

<div class="contenedorDefinicion">
    
    <div class="definicion">

        <p>El logotipo se construyó a partir del icono de la Escucha, nuestro concepto fundamental. El mismo refleja las formas de organización política y social de la comunidad guaraní, quienes vivían en aldeas que estaban dispuestas en torno a una plaza grande en forma cuadrangular donde desarrollaban sus actividades, siendo ese lugar determinante para escucharse mutuamente en sus intereses políticos y sus necesidades.</p>
    
        <div class="hendulogotipo">
            <img src="{{ asset('img/henduAlt.png') }}" alt="">
        </div>
    </div>
    
</div>

@endsection