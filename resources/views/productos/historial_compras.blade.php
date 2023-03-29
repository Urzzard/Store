@extends('layouts.app')

@section('content')

    <div class="col-sm-7 mx-auto mt-5">
        <div class="card">
            <div class="row">
                <div class="col-3 border-end pe-0">
                        <div class="py-4 ps-3 border-bottom bg-info text-white">
                            <h3 class=""><b>{{Auth::user()->name}}</b> <b>{{Auth::user()->apellido}}</b></h3>
                        </div>
                        <div class="py-3 ps-3 border-bottom ">
                            <a class="fs-6 text-decoration-none fw-bold" href="{{ route('perfil-cliente') }}">Perfil</a>
                        </div>
                        <div class="py-3 ps-3 border-bottom">
                            <a class="fs-6 text-decoration-none fw-bold" href="compras">Historial de Compras</a>
                        </div>
                </div>
                <div class="col">

                    @foreach ($historial as $cosa)
                        <div class="card mx-2 my-3">
                            <div class="row">
                                <div class="col-2 my-auto text-center">
                                    <b>{{$cosa->fecha}}</b>
                                </div>
                                <div class="col-8 border-end border-start">
                                    <div class="mt-3">
                                        <p class="border-bottom"><b>ORDEN DE COMPRA: #{{$cosa->id}}</b></p>
                                    </div>
                                    <div calss="">
                                        @foreach ($cosa->compraitem as $subitem)
                                            <div class="row">

                                                <div class="col-5">
                                                    <p class="">{{$subitem->item->producto->nombre}}</p>
                                                </div>
            
                                                <div class="col-3">
                                                    <p class="">Cantidad: <b>{{$subitem->cantidad}}</b></p>
                                                </div>

                                                <div class="col-4">
                                                    <p class="">Subtotal: <b>S/. {{$subitem->subtotal}}</b></p>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-2 my-auto text-center">
                                    TOTAL: <b>S/. {{$cosa->total}}</b>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection