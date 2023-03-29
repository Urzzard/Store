@extends('layouts.app')

@section('content')

    <div> TE HAS LOGUEADO COMO {{ Auth::user()->rol->nombre }}</div>

@endsection