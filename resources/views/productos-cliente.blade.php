@extends('layouts.app')

            @section('content')
            <div class="col-sm-7 mx-auto my-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="/">INICIO</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="productos-cliente">PRODUCTOS</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>

            <div class="container border-bottom">
                <div class="row justify-content-center">

                    @foreach($tproductos as $tproducto)
                        <a href="" class="col-auto mb-5 mx-3 text-decoration-none">
                            <div>
                            <img src="https://www.goodyearhealth.com/wp-content/uploads/350x300.png"  alt="">
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
                