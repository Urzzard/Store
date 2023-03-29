@extends('layouts.app')
    @section('content')


      <div id="carouselExampleIndicators" class="carousel slide mb-5 mt-5" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{!! asset('img/1.png')!!}" class="" alt="..." width="100%" height="550px">
            </div>
            <div class="carousel-item">
              <img src="{!! asset('img/2.png')!!}" class="" alt="..." width="100%" height="550px">
            </div>
            <div class="carousel-item">
              <img src="{!! asset('img/3.png')!!}" class="" alt="..." width="100%" height="550px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>

    
    <div class="py-5 row justify-content-center">
      <div class="text-info col-auto border-bottom border-2 border-info">
        <h1>LO MAS PEDIDO!</h1>
      </div>
    </div>

    <div class="container border-bottom">
      <div class="row justify-content-center">

        @foreach($productos as $producto)
                      
                          <a href="{{ route('productos.vista', $producto )}}" class="col-auto mb-5 mx-3 text-decoration-none">
                              <div>
                                <img src="{{ $producto->get_image }}" width="300px" height="350px" class="img-thumbnail">
                              </div>
                              <div class="mt-3 text-center">
                                  <div href="" class="">
                                      <h4 class="text-info">{{$producto->nombre}}</h4>
                                  </div>
                              </div>
                          </a>           
        @endforeach 

        

    <div class="row my-5 justify-content-center px-5">

      <div class="col-md-5 my-auto">
          <h2 class="text-info">Conoce mas de nosotros!!</h2>
          <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam facilis explicabo nemo ea velit numquam, itaque earum, excepturi maiores expedita rerum molestiae animi reprehenderit voluptatibus deleniti, perspiciatis aliquid esse provident.</p>
      </div>

      <div class="col-auto">
        <img class="img-fluid img-thumbnail" src="{!! asset('img/nosotros.jpg')!!}" width="500px" height="300px" alt="">
      </div>

    </div>


    @endsection
