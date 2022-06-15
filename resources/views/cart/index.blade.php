@extends('layouts.principal')

@section('contenido')
<div class= "row">
     <h1>Carrito de compras</h1>
</div>
@if(!session('cart'))
<div class="row">
    <p>No hay items en el carrito</p>
</div>
@else
<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>Producto</tr>
                <tr>Cantidad</tr>
                <tr>Precio</tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $index => $prod)
            <tr>
                <td>{{$prod[0]['nombre_prod'] }}</td>
                <td>{{$prod[0]['cantidad'] }}</td>
                <td>$ {{$prod[0]['precio_prod'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
<form action="{{route('cart.destroy', 1)}}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn waves-effect waves-light" 
      type="submit"
      name="action">
      Desocupar carrito
       </button>
</form>
</div>
@endif
@endsection