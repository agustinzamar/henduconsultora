<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hendu - @yield('title')</title>

    @routes
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/8fb0187cba.js"></script>
    @section('head')
    @show
</head>
<body>

    <header class="menu">
        <div class="logoContenedor">

            <a href="{{ route('inicio') }}"><img class="imgLogo" src="{{ asset('img/hendu.png') }}" alt="Logo Hendu Consultora"></a>
            <div class="header-derecha">
                @if(Auth::check())
                    <legend> Bienvenido, {{ Auth::user()->username }} </legend>
                @endif
                <i class="icon material-icons" id="menuIcon">menu</i>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            
            <a href="{{ route('inicio') }}" class="imagenMenu"><img src="{{ asset('img/icon.png') }}" alt="Logo Hendu Consultora"></a>

            <a href="{{ route('inicio') }}" class="tituloMenu">INICIO</a>
            <a href="{{ route('concepto') }}" class="tituloMenu">CONCEPTO HENDU</a>

            @if(Auth::check())
                <!-- <a href="#" class="tituloMenu">REDACTAR NOVEDAD</a> -->
                <a target="_blank" href="https://webmail1.hostinger.com.ar/" class="tituloMenu">EMAIL</a>
                <a href="{{ route('logout') }}" class="tituloMenu">SALIR</a>
            @endif
        </div>
    </header>

    @section('main')
        
    @show

    <footer>
		<div class="allfoot">
			<div class="conteinerFoot">
				<div class="column1">
					<h6>Seguinos en nuestras Redes Sociales</h6>
					<a href="https://twitter.com/HENDU2018" target="_blank"><i class="icon1 fab fa-twitter"></i>Twitter</a><hr class="fbar">
				</div>
				<div class="column2">
					<h6>Contacto</h6>
					<h6><i class="icon1 fas fa-envelope"></i>contacto@henduconsultora.com</h6>
				</div>
			</div>
			<div class="conteinerFoot2">
				<h6>Todos los derechos reservados &copy; Hendu consultora  {{ Carbon\Carbon::now()->format('Y') }}</h6>
			</div>
		</div>
    </footer>
    
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">

		const menuIcon = document.querySelector('#menuIcon');
        const sidebar = document.querySelector('#sidebar');
        menuIcon.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        })

    </script>
    
    @section('scripts')
    @show
</body>
</html>