<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Raleway:wght@400;700;900&family=Staatliches&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra de Navegación -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column nav-list">
                        <article class="mb-5">
                            <img src="{{ asset('assets/images/foto3.png')}}" class="" alt="chicos_itabecimg" />
                            <img src="{{ asset('assets/images/foto2.png')}}" class="" alt="chicos_itabecimg" />             
                        </article>
                        <li class="nav-item"><a class="nav-link mt-2" href="{{ route('inicio') }}">JESÚS CASTILLO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sobremi') }}">SOBRE MÍ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('portafolio') }}">PORTAFOLIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('educacion') }}">EDUCACIÓN</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('habilidades') }}">HABILIDADES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

   
    

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>

    @yield('content')
    
</body>
</html>