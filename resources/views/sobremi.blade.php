@extends('landing')
@section('title', 'Sobre mí')
@section('content')
<section>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-end align-items-center h-100">
          <div class="col-xl-10">
            <div class="rounded-3 contenedor1">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4 contenedor1">
                    <p class="display-2">SOBRE MÍ</p>
                    <br>
                    <div>
                    <p class="fs-5 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ullamcorper, 
                        nulla id tristique tempus, arcu tortor congue sem, et volutpat purus tortor eget dolor. Vivamus finibus 
                        feugiat eleifend. Morbi dignissim quis odio quis maximus. Duis aliquam vestibulum mauris eget bibendum. 
                        Nullam auctor tempor luctus. Quisque in rhoncus urna. Pellentesque vel ipsum ipsum. Mauris a viverra nunc. 
                        Integer ipsum ipsum, ornare id dapibus eget, venenatis pulvinar tortor. </p>
                        <br><br>  
                    </div> 
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('assets/images/gal1.png')}}" alt="Imagen 1" class="img-fluid imagen-con-efecto imagen-rotadainversa">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/images/gal2.png')}}" alt="Imagen 2" class="img-fluid imagen-con-efecto imagen-rotada">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/images/gal3.png')}}" alt="Imagen 3" class="img-fluid imagen-con-efecto imagen-rotadainversa">
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