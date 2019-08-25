@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{asset('css/novedades.css')}}">
@endsection

@section('title', 'Novedades')

@section('main')

@if($novedades->count() > 0)

<div class="grid" id="container">
    @foreach($novedades as $x)

        
            <div class="gridItem">

                <div class="img"> 
                    <img src="{{ asset($x->img_preview) }}" alt="Foto descriptiva del articulo" /> 
                </div>

                <div class="fecha">

                    <i class="material-icons">calendar_today</i><p>{{$x->fecha}}</p>
                    
                </div>

                <div class="titulo">

                    <a href="{{ route('novedades.ver', $x->id) }}">
                        <h2>{{$x->titulo}}</h2>
                    </a>
                            
                </div>

                <div class="descripcion">

                    <p>{{$x->descripcion}}</p>
                            
                </div>

                <div class="perfil">

                    <img src="{{ asset($x->autor->img) }}" alt="Foto del usuario redactor" />
                    <b><p class="nombre">Por: {{$x->autor->username}}</p></b>
                            
                </div>
                
                @if(Auth::check())
                    <!-- Delete Or update code -->
                    <div class="oculto">
                        <legend class="eliminar" onclick="remove({{$x->id}}, event)">Eliminar</legend>
                        <legend class="modificar" onclick="edit({{$x->id}})">Modificar</legend>
                    </div>
                @endif
   
            </div>

    @endforeach
</div>
@else
    
    <div class="redactando">
        <img src="{{ asset('img/redactando.svg') }}" alt="">
        <h1>ESTAMOS REDACTANDO NOVEDADES DE TU INTERÉS</h1>
    </div>

@endif

@endsection

@section('scripts')
<script>

    const remove = (id, event) => {
        
        const url = route('novedades.destroy', id);

        axios.delete(url)
            .then(res =>{
                
                const container = document.querySelector('#container');
                const card = event.target.parentElement.parentElement;
                container.removeChild(card);

            })
            .catch(err => {
                console.error(err.response);
            })
        
    }

    const edit = (id) => {
        const url = route('novedades.editar', id);
        location.href = url;
    }
</script>
@endsection