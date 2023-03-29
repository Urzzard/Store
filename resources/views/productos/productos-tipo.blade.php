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
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>

            <div class="container border-bottom">
                <div class="row justify-content-center">

                    @foreach($tproductos as $tproducto)
                        <a href="{{ route('productos.cliente', $tproducto )}}" class="col-auto mb-5 mx-3 text-decoration-none">
                            <div>
                              <img src="{{ $tproducto->get_image }}" width="300px" height="350px" class="img-thumbnail">
                            </div>
                            <div class="mt-3 text-center">
                                <div href="" class="">
                                    <h4 class="text-info">{{$tproducto->nombre}}</h4>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
              </div>
            
            @endsection