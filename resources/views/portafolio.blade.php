@extends('landing')
@section('title', 'Portafolio')
@section('content')
<section>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-end align-items-center h-100">
          <div class="col-xl-10">
            <div class="rounded-3 contenedor1">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4 contenedor1 text-right">
                    <p class="display-2">PORTAFOLIO DE PROYECTOS</p>
                    <br>
                    <!-- CARDS DE PROYECTOS -->
                    <div class="row">
                        <!-- Tarjeta 1 -->
                        <div class="col-md-4 mb-4 bgmorado zoomimg">
                            <div class="card bgrosa">
                                <img src="{{ asset('assets/images/proyect1.png')}}" class="card-img-top" alt="Proyecto 1">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Proyecto 1</h5>
                                    <p class="card-text">Descripción breve del proyecto.</p>
                                    <a href="enlace_proyecto1" class="btn btn-primary">Ver en GitHub</a>
                                </div>
                            </div>
                        </div>
                
                        <!-- Tarjeta 2 -->
                        <div class="col-md-4 mb-4 bgmorado zoomimg">
                            <div class="card bgrosa">
                                <img src="{{ asset('assets/images/proyect1.png')}}" class="card-img-top" alt="Proyecto 2">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Proyecto 2</h5>
                                    <p class="card-text">Descripción breve del proyecto.</p>
                                    <a href="enlace_proyecto2" class="btn btn-primary">Ver en GitHub</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 3 -->
                        <div class="col-md-4 mb-4 bgmorado zoomimg">
                            <div class="card bgrosa">
                                <img src="{{ asset('assets/images/proyect1.png')}}" class="card-img-top" alt="Proyecto 3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Proyecto 3</h5>
                                    <p class="card-text">Descripción breve del proyecto.</p>
                                    <a href="enlace_proyecto3" class="btn btn-primary">Ver en GitHub</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 4 -->
                        <div class="col-md-4 mb-4 bgmorado zoomimg">
                            <div class="card bgrosa">
                                <img src="{{ asset('assets/images/proyect1.png')}}" class="card-img-top" alt="Proyecto 4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Proyecto 4</h5>
                                    <p class="card-text">Descripción breve del proyecto.</p>
                                    <a href="enlace_proyecto4" class="btn btn-primary">Ver en GitHub</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 5 -->
                        <div class="col-md-4 mb-4 bgmorado zoomimg">
                            <div class="card bgrosa">
                                <img src="{{ asset('assets/images/proyect1.png')}}" class="card-img-top" alt="Proyecto 5">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Proyecto 5</h5>
                                    <p class="card-text">Descripción breve del proyecto.</p>
                                    <a href="enlace_proyecto5" class="btn btn-primary">Ver en GitHub</a>
                                </div>
                            </div>
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