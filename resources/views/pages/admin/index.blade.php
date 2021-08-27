@extends('layouts.app')

@section('content')
    <div style="position: relative; top: 40%; left: 40%;">
    <br>
    
        <h3>Bienvenido {{Auth::user()->nombre}}</h3>
</div>

@endsection