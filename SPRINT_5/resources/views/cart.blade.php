@extends('layouts.plantilla')
@section('header_title')
    Tus Compras - TecnoMovil
@endsection
@section('content')
   
<section class="carritocompra">

   <h1>Tus Compras </h1>       
  <hr>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                </div>
            @endif
            <?php $total=0;?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col" style="text-align: center">Cantidad</th>
                                        <th scope="col" style="text-align: center">Precio</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productosCart as $productoCart):
                                        @if((Auth::user())&&(Auth::user()->id===($productoCart->user_id)))
                                            <tr>
                                                <td><a href="{{route('productos.show', $productoCart->producto_id)}}">{{ $productoCart->nombre }}</a></td>
                                                <td style="text-align: center">{{ $productoCart->cantidad }}</td>
                                                <td style="text-align: center">${{ $productoCart->precio }}</td>
                                                <td style="text-align: right">
                                                    <form action="{{ route('cart.destroy', $productoCart->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php $total += ($productoCart->cantidad*$productoCart->precio);?>
                                        @endif
                                    @endforeach
                                </tbody>
                                <tr>
                                    <td colspan="4" style="text-align: right; padding-bottom:0"><b>Total: $<?php echo $total;?></b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--<table class="table">
	<thead class="thead-dark">
	  <tr>
		<th scope="col">Producto</th>
		<th scope="col">Precio</th>
		<th scope="col">Cantidad</th>
		<th scope="col">Total</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<th scope="row">Iphone 7 Plus</th>
		<td>45.000 ARS</td>
		<td>1</td>
		<td>45.000 ARS </td>
	  </tr>
	</tbody>
  </table> -->
 


  

</section>

   
        
@endsection
