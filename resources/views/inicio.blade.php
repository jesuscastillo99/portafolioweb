@extends('landing')
@section('title', 'Inicio')
@section('content')
<section>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-end align-items-center h-100">
          <div class="col-xl-10">
            <div class="rounded-3 contenedor1">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4 contenedor1 text-right">
                    <p class="display-2">JESUS CASTILLO</p>
                      <div class="d-inline-block">
                        <p class="typewriter pazul fs-2" id="mensaje">En camino a ser un desarrollador web.</p>
                      </div>
                    <br>
                    <p class="fs-4">BIEVENID@ A MI PORTAFOLIO DE PROYECTOS COMO PROGRAMADOR.</p>   
                    <br>
                    <a class="asinunderline" href="{{ asset('assets/files/curriculum.pdf')}}" download="curriculum.pdf">
                    <button class="button-53" role="button">DESCARGA MI CV</button>   
                    </a>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

@endsection