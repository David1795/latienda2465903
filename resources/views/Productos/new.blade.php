@extends('layouts.menu')

@section('contenido')

<div class="row">
<h1 class=" grey-text text-darken-1" >Nuevo Producto</h1>

</div>

<div class="row">
<form action="" class="col s8">
<div class="row">
<div class="input-field col s8">
<input type="text" placeholder="Nombre del producto" id="nombre" name="nombre" />
<label for="nombre">Nombre</label>
</div>

<div class="row">
<div class="input-field col s8">
<textarea name="desc" placeholder="Descripcion"  id="desc" class="materialize-textarea">
</textarea>
<label for="desc">Descripcion</label>
</div>
</div>

<div class="row">
<div class="input-field col s8">
<input type="number" placeholder="Precio" id="precio" name="precio" />
<label for="precio">Precio</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
    <select id="">
      @foreach( $marcas as $marca)
    
      <option value=""> {{$marca->nombre}}</option>
      @endforeach
    </select>
    <label for="marca">Elija la Marca</label>
  </div>
</div>

<div class="row">
<div class="file-field input-field">
      <div class="btn">
        <span>Imagen de producto </span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
</div>

<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>
</div>
</form>
</div>
@endsection