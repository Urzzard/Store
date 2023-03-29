@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--CON ESTO PODEMOS PONER EL NOMBRE DEL ROL DEL USUARIO-->
                <div class="card-header">{{ Auth::user()->rol->nombre }}</div>
                <div class ="row justify-content-center p-3">
                    <a href="usuarios" class="btn btn-primary m-3">USUARIOS</a>
                    <a href="productos" class="btn btn-primary m-3">PRODUCTOS</a>
                    <a href="tipos-productos" class="btn btn-primary m-3">TIPO PRODUCTOS</a>
                </div>

                
            </div>
        </div>
    </div>
</div>

    

@endsection