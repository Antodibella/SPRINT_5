@extends('layouts.plantilla')
@section('header_title')
    Carrito - TecnoMovil
@endsection
@section('content')
   
<section class="cartVacio">
    <br><br>
<h1>Ups. No hay productos en tu carrito :(</h1><br>
<p>Tengo una idea, aqui en el boton comprar ahora vas a visualizar todos </p><p> nuestros productos disponibles en TecnoMovil, ¿Vamos a verlos?</p>
<br>
<a href="/productos"><button class="btn btn-dark">Ir a Tienda</button></a>
</section>
<br><br><br>
   
        
@endsection