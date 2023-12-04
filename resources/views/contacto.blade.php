@extends('landing')
@section('title', 'Contacto')
@section('content')
<section>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-end align-items-center h-100">
          <div class="col-xl-10">
            <div class="rounded-3 contenedor1">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4 contenedor1 text-right">
                    <p class="display-2">CONTÁCTAME</p>
                    <br>

                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center p-2">
                            <i class="bi bi-envelope-fill p-2 mb-1"></i>
                            <h3 class="ml-2">Correo electrónico:</h3>
                            <h4 class="p-2 text-decoration-underline colort">choycastillo7u7@gmail.com</h4>
                        </div>
                    
                        <div class="d-flex align-items-center p-2">
                            <i class="bi bi-linkedin p-2 mb-1"></i>
                            <h3 class="ml-2">LinkedIn:</h3>
                            <h4 class="p-2"><a href="https://www.linkedin.com/in/jesuscastillo3010/" class="colort">https://www.linkedin.com/in/jesuscastillo3010/</a></h4>
                        </div>

                        <div class="d-flex align-items-center p-2">
                            <i class="bi bi-github p-2 mb-1"></i>
                            <h3 class="ml-2">Github:</h3>
                            <h4 class="p-2"><a href="https://github.com/jesuscastillo99" class="colort">https://github.com/jesuscastillo99</a></h4>
                        </div>

                        <div class="d-flex align-items-center p-2">
                            <i class="bi bi-whatsapp p-2 mb-1"></i>
                            <h3 class="ml-2">WhatsApp:</h3>
                            <h4 class="p-2 text-decoration-underline colort">+524811159534</h4>
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