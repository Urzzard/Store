@extends('layouts.app')

            @section('content')
            <div class="col-sm-7 mx-auto my-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="/">INICIO</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="nosotros">NOSOTROS</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>

            <div class="container">

              <div class="row justify-content-center py-4 text-center">
                <!--ESTO ES UN POCO TEDIOSO DE ENTENDER PERO FUNCIONA MASOMENOS ASI:
                    DESDE XXL osea, desde 1400px EN ADELANTE, LA COLUMNA TOMA ESE TAMAÑO
                    DESDE XL osea, desde 1400px a 1200px LA COLUMNA TOMA ESE TAMAÑO-->
                <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-12">
                  <h2 class="fw-bold">DESCRIPCION</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam veniam illum ipsa ea id vitae, vel doloribus obcaecati voluptatum minus quidem asperiores delectus nam, quos ratione eos consequatur praesentium.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam veniam illum ipsa ea id vitae, vel doloribus obcaecati voluptatum minus quidem asperiores delectus nam, quos ratione eos consequatur praesentium.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam veniam illum ipsa ea id vitae, vel doloribus obcaecati voluptatum minus quidem asperiores delectus nam, quos ratione eos consequatur praesentium.</p>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 text-center">
                  <img src="{!! asset('img/nosotros.jpg')!!}" class="img-fluid img-thumbnail" alt="">
                </div>
              </div>
                            
            </div>

            @endsection