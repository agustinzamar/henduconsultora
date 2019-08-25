@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{asset('css/redactar.css')}}">
@endsection

@section('title', 'Redactar')

@section('main')

<form onsubmit="upload(event)" class="redactarFormulario" method="POST" id="noticia-upload" enctype="multipart/form-data" autocomplete="off">
		
    <input class="redactarTitulo" type="text" name="titulo" placeholder="Titulo" required>

    <input class="redactarTitulo" type="text" name="descripcion" placeholder="Describe el articulo" required>

    <label for="img">Elige una imagen principal</label>
    <input type="file" name="imagen" required>

    <textarea class="redactarCuerpo" id="cuerpo" name="cuerpo"></textarea>

    <input type="submit" value="Publicar" id="submit" name="submit">

</form>

@endsection

@section('scripts')

<script>

    const upload = (event) => {
        event.preventDefault();

        const form = event.target;
        const url = route('novedades.store');

        formData = new FormData(form);
        formData.append('autor', {{ Auth::user()->id }});

        axios.post(url, formData)
            .then(res => {
                console.log('Publicado');
                form.reset();
            })
            .catch(err => {
                console.log(err.response);
            })
        
    }

</script>
@endsection