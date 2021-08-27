@extends('layouts.app')

@section('content')
<div class="container">
<div style="text-align: center;">
    <h2 class="mb-3">Registrar producto</h2>
    <form method="POST" action="{{route('productos.store')}}">
        <input id="formMethod" name="_method" type="hidden" value="POST">
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Nombre de la categoria" required="categoria">
            </div>

            <div class="col-sm-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required="nombre">
            </div>

            <div class="col-md-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del producto" required="descripcion">
            </div>
            <div class="col-md-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del producto" required="Marca">
            </div>
            <div class="col-md-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" min="0" placeholder="Cantidad de producto" required="cantidad">
            </div>
            <div class="col-md-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" min="0" step="any" placeholder="precio del producto" required="precio">
            </div>
        </div>

        <hr class="my-4">
        <div style="text-align: center;">
					<button class="col-10 btn-primary col-sm-6" type="submit">Registrar producto</button>
        </div>
    </form>       

@endsection 