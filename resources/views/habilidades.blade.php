@extends('landing')
@section('title', 'Habilidades')
@section('content')
<section>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-end align-items-center h-100">
          <div class="col-xl-10">
            <div class="rounded-3 contenedor1">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4 contenedor1 text-right">
                    <p class="display-2">HABILIDADES</p>
                    <br>  
                    <h2 class="mb-4">Lenguajes de programación</h2> 
                    
                        <div class="d-flex justify-content-start">
                            <!-- Imagen de Java -->
                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/java.png')}}" alt="Java" class="">
                            </div>

                            <!-- Imagen de HTML -->
                            <div class="p-2 bgrosa bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/html5.png')}}" alt="HTML" class="">
                            </div>

                            <!-- Imagen de CSS -->
                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/css.png')}}" alt="CSS" class="">
                            </div>

                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <!-- Imagen de JavaScript -->
                            <img src="{{ asset('assets/images/js.png')}}" alt="JavaScript" class="">
                            </div>

                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <!-- Imagen de Php -->
                            <img src="{{ asset('assets/images/php.png')}}" alt="php" class="">
                            </div>

                        </div>

                        <br>
                    <h2 class="mb-4">Frameworks y Librerías</h2>
                        <div class="d-flex justify-content-start">
                            <!-- Imagen de Bootstrap -->
                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/bts.png')}}" alt="bts" class="">
                            </div>

                            <!-- Imagen de Laravel -->
                            <div class="p-2 bgrosa bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/laravel.png')}}" alt="laravel" class="">
                            </div>

                        </div>
                        <br>
                    <h2 class="mb-4">Software y tecnologías</h2>
                        <div class="d-flex justify-content-start">
                            <!-- Imagen de VS Code -->
                            <div class="p-2 bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/vscode.png')}}" alt="vscode" class="">
                            </div>

                            <!-- Imagen de GIT -->
                            <div class="p-2 bgrosa bg-white rounded contenedorsombra mx-4">
                            <img src="{{ asset('assets/images/git.png')}}" alt="git" class="">
                            </div>

                            <!-- Imagen de NETBEANS -->
                            <div class="p-2 bgrosa bg-white rounded contenedorsombra mx-4">
                                <img src="{{ asset('assets/images/netbeans.png')}}" alt="neatbeans" class="">
                            </div>

                        </div>

                   </div>        
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
</section>
@endsection