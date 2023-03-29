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
                        <a class="fs-6 text-decoration-none fw-bold" href="{{ route('compras.historial') }}">Historial de Compras</a>
                     </div>
                </div>
                <div class="col pb-5">
                    <div class="row mt-5">
                        <div class="col-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="300" height="350" fill="currentColor" class="bi bi-person-fill border" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                        </div>
                        <div class="col-5">
                            <span><b>Nombre:</b></span>
                            <p>{{Auth::user()->name}}</p>

                            <span><b>Apellido:</b></span>
                            <p>{{Auth::user()->apellido}}</p>

                            <span><b>Email:</b></span>
                            <p>{{Auth::user()->email}}</p>

                            <span><b>Tipo de Usuario:</b></span>
                            <p>{{Auth::user()->rol->nombre}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection