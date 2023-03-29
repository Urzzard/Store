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
            <div class="col-sm-7 mx-auto mb-5 mt-5">
                <div class="card pb-4">
                    <div class="p-4">
                        <h2><b>Carrito de Compras</b></h2>
                        <p style="display:none">{{$sub = 0}}</p>
                    </div>
                    <div class="row">
                      <div class="col my-auto">
                      @if($item->isEmpty())
                        <div class="col">
                          <div class="text-muted py-5 text-center">
                            Actualmente vacio...
                          </div>
                        </div>
                      @else
                        @foreach ($carrito as $carritos)
                        @endforeach
                        
                            @foreach ($item as $items)
                              @if($carritos->id == $items->carrito_id)
                              <p style="display:none">{{$sub = $sub+$items->subtotal}}</p>
                              <div class="card col ms-3 my-1">
                                <div class="row">

                                  <div class="col-4 my-3 ms-4">
                                    <img src="{{ $items->producto->get_image }}"  width="150px" height="155px" class="" alt="">
                                  </div>

                                  <div class="col-6 my-3">
                                    <h4 class="fw-bold">
                                      <p>{{$items->producto->nombre}}</p>
                                    </h4>
                                    
                                    <form action="{{ route('items.actualizar', $items->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <div class="row fs-6">
                                        <div class="fw-bold col-4 my-auto">Cantidad: </div>
                                        <div class="col-3">
                                          <input type="number" name="cantidad" class="form-control" value="{{$items->cantidad}}" min="1">
                                        </div>
                                        <div class="col">
                                          <button type="submit" class="btn btn-info text-white fw-bold">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                              <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                            </svg>
                                          </button>
                                        </div>
                                      </div>
                                    </form>

                                    <p class="fw-bold fs-4 mt-4 text-info">S/. {{number_format($items->subtotal,2)}}</p>
                                  </div>

                                  
                                    <div class="col-1 my-auto">
                                      <form action="{{ route('items.eliminar', $items->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white fw-bold">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                          </svg>
                                        </button>
                                      </form>
                                    </div>
                                </div>
                              </div>

                              @endif
                            @endforeach
                        
                      @endif
                      </div>
                      
                      <div class="col-4 me-3">
                        <div class="card p-4">
                          <div class="row">
                            <div class="fs-4 fw-bold">
                              SubTotal:
                            </div>
                            <div class="col text-end border-bottom py-2">
                                @foreach ($item as $items)
                                  @if($carritos->id == $items->carrito_id)
                                  <div>
                                    S/. {{number_format($items->subtotal,2)}}
                                  </div>
                                  @endif
                                @endforeach
                            </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col fs-3 fw-bold">
                              TOTAL:
                            </div>
                            <div class="col fs-2 text-end">
                              S/. <b name="total">{{number_format($sub,2)}}</b>
                            </div>
                          </div>
                          <div class="mx-auto mt-4">
                            <form action="{{route('compra.crear')}}" method="POST">
                              <input type="hidden" name="total" value="{{$sub}}">
                              @csrf
                              <button type="submit" class="btn btn-danger text-white fw-bold"> FINALIZAR COMPRA
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                                </svg>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                </div>
            </div>

            @endsection