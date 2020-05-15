@extends('layouts.plantilla')
@section('header_title')
    Inicio - TecnoMovil
@endsection
@section('content')
    
<!--  Banner  -->
<section class="index">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active ">
<img src="img/diapositiva-01.jpg" class="d-block w-100" alt="1">
</div>
<div class="carousel-item">
<img src="img/diapositiva-03.jpg" class="d-block w-100" alt="2">
</div>
<div class="carousel-item">
<img src="img/diapositiva-04.webp" class="d-block w-100" alt="3">
</div>
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

<br>
<br>
<br>

<!--  los mas vendidos  -->
<div  class="losmasbuscados">
<h1 class="buscados"> Celulares destacados <a href="productos">  Ir a la tienda ></a></h1> 
<div  class="row">

    <?php foreach($productos as $producto) : ?>
    
  <div class="col-md-4 col-lg-4">
        <div class="card" style="width: 25rem;">
        <div class="card-body">
        <h3 class="card-title"><a href="producto/<?=$producto['id']?>"></h3><h3><?=$producto['marca']?> <?=$producto['modelo']?></h3></a>
        <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
        <h4>ARS <?=$producto['precio']?></h4>
        <a href="#" class="btn btn-dark">Comprar</a>

  </div>
  </div>
  </div>
    <?php endforeach; ?>
</div>
</div>
<br>
</section>

@endsection