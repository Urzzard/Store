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
                            <a class="h4 text-info" href="../productos-tipo">PRODUCTOS</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>

            <div class="container border-bottom">
                <div class="row justify-content-center">

                  @foreach($productos as $producto)
                      
                        @if ($producto->tipo == $tproducto->id)
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
                        @endif
                      
                  @endforeach 

                </div>
              </div>
            
            @endsection
                