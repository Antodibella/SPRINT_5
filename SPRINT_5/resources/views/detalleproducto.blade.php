@extends('layouts.plantilla')
@section('header_title')
{{$producto->marca}}  - TecnoMovil
@endsection
@section('content')

    
<section class="producto"> 
     <div class="row">
    <div class="col-md-6 col-lg-6">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active ">
            <img src="/storage/{{$producto->foto}}" alt="logotipo" class="d-block w-100" alt="1">
            </div>
            
            @if ($producto->foto1):
            <div class="carousel-item">
            <img src="/storage/{{$producto->foto1}}" alt="logotipo" class="d-block w-100" alt="2">
            </div>   
            @endif
            @if ($producto->foto2):
            <div class="carousel-item">
            <img src="/storage/{{$producto->foto2}}" alt="logotipo" class="d-block w-100" alt="3">
            </div>
            @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
           
                                
    </div>
    <div class="col-md-6 col-lg-6">
                
        <ul>
            <h2><?=$producto['marca']?> <?=$producto['modelo']?></h2>
            <hr>
            <?=$producto['caracteristicas']?>
        </ul>
        <hr>
        <ul><li><strong>PRECIO: <?=$producto['precio']?> ARS</strong></li></ul>
        <button type="button" class="btn btn-outline-success"><a href="carrito.php?nombre=Iphone-8&precio=65000">Comprar ahora</button></a>
        <button type="button" class="btn btn-outline-primary"><a href="carrito.php?nombre=Iphone-8&precio=65000">Agregar al carrito</button>
        <br><br>
    </div>
</div>

</section>

@endsection