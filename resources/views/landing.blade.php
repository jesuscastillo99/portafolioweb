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
     <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra de Navegación -->
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">JESÚS CASTILLO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sobremi') }}">SOBRE MÍ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('portafolio') }}">PORTAFOLIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('educacion') }}">EDUCACION</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('habilidades') }}">HABILIDADES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Contenido de la página -->
                
            </main>
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