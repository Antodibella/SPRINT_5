<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;

//Vaciamos el carrito

if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
}

//Obtenemos los productos anteriores

if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anyado un nuevo articulo al carrito

if(isset($_GET['nombre']) && isset($_GET['precio'])) {
	$iUltimaPos = count($aCarrito);
	$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
	$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
}

//Creamos la cookie (serializamos)

$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array

foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
	$fPrecioTotal += $value['precio'];
}

//Imprimimos el precio total

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal;

?>
@extends('layouts.plantilla')
@section('header_title')
    Tus Compras - TecnoMovil
@endsection
@section('content')
   
<section class="carritocompra">

<div class="jumbotron">

   <h1>Tus Compras </h1>       
  <hr>
  
    
<table class="table">

	<thead>
	  <tr>
		<th scope="col">Numero</th>
		<th scope="col">Marca</th>
		<th scope="col">Modelo</th>
		<th scope="col">Foto</th>
		<th scope="col">Caracteristicas</th>
		<th scope="col">Precio</th>
		<th scope="col">Acciones</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	  </tr>
	  
	</tbody>
	
  </table>
	
  
</div>
</section>
<br><br><br>
   
        
@endsection