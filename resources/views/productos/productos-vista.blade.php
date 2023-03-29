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
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="../productos-cliente/{{$producto->tipo}}">{{$producto->tipode->nombre}}</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>
            <div class="col-sm-7 mx-auto mb-5 mt-5">
                <div class="card">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                              {{session('status')}}
                        </div>
                      @endif
                    <div class="row mb-5">
                        <div class="row mt-5">
                            <div class="col-4 mx-auto my-auto">
                                <img src="{{ $producto->get_image }}"  width="300px" height="310px" class="" alt="">
                            </div>
                            <div class="col-5">

                              <div class="col mt-2 mb-5">
                                <h1 class=""><b>{{$producto->nombre}}</b></h1>
                              </div>

                              <div class="row">
                                <div class="col-6">
                                  <p class="text-info fs-1 fw-bold">S/. {{number_format($producto->precio,2)}}</p>
                                </div>
                                <div class="col-6 my-auto">
                                  <span><b>Unidades en Stock:</b></span>
                                  <p>{{$producto->cantidad}} unidades</p>
                                </div>
                              </div>

                              <!--POSIBLE IF PARA CREAR DOS FORMULARIOS PARECIDOS, QUE UNO CREE Y OTRO ACTUALICE-->
                              <form action="{{ route('items.crear', $producto) }}" method="POST">
                                <!--<input type="number" name="producto_id" value="{{$producto->id}}" autocomplete="producto_id" style="display:none">-->
                                <input type="number" name="subtotal" value="{{$producto->precio}}" step="0.01" autocomplete="subtotal" style="display:none">
                                <div class="row">
                                  <div class="col-3 mb-5">
                                    <span><b>Cantidad</b></span>
                                    <input type="number" name="cantidad" class="form-control" value="1" min="1">
                                  </div>
                                  <div class="col-7 mt-4">
                                    @csrf
                                    <button type="submit" class="btn btn-info text-white fw-bold">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus me-2" viewBox="0 0 16 16">
                                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                      </svg> Añadir al carrito
                                    </button>
                                  </div>
                                </div>
                              </form>

                              <div class="col">
                                <span><b>Descripcion:</b></span>
                                <p>{{$producto->descripcion}}</p>
                              </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection