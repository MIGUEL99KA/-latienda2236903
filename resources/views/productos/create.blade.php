@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class= "light-blue-text text-lighten-1">Nuevo Producto</h1>
  </div>
  <div class="row">
    <form method="POST"
    action="{{url('productos')}}"
   class="col s12">
   @csrf
      <div class="row">
        <div class="input-field col s8">
          <input 
          placeholder="Nombre de Producto" 
          id="nombre" 
          type="text" 
          class="validate"
          name="nombre">
          <label for="nombre">Nombre de Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <textarea 
        id="descripcion" 
        name="desc" 
        class="materialize-textarea">
      
      </textarea>
        <label 
        for="desc">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
          id="precio"
          name="precio" 
          type="text" 
          class="validate">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s8">
      <div class="btn">
        <span>Imagen de Producto...</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    </div>
    <div class="row"> 
    <div class="input-field col s8">
    <select name= "categoria">
      <option value="" disabled selected>Elija categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{$categoria->id }}">
        {{$categoria -> nombre}}</option>
      @endforeach
    </select>
    <label>Categorias disponibles</label>
    </div>
    </div>
    <div class="row"> 
    <div class="input-field col s8">
    <select name= "marca">
      <option value="" disabled selected>Elija marca</option>
      @foreach($marcas as $marca)
      <option value="{{$marca->id }}">
        {{$marca -> nombre}}</option>
      @endforeach
    </select>
    <label>Marcas disponibles</label>
    </div>
    </div>
      <div class="row">
        <div class="col s12">
          <div class="row">
        <button class="btn waves-effect waves-light" 
      type="submit"
      name="action">
      Guardar
          </div>
    </form>
  </div>
  @endsection