@extends('layouts.plantilla')
@section('header_title')
    Inicio - TecnoMovil
@endsection
@section('content')
    
<!--  Banner  -->
<section>

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


<!--  los mas vendidos  -->
<div class="productos-mas-vendidos">
<h2>Los más vendidos en TecnoMovil</h2>

<div class="row">
<div class="col-md-6 col-lg-4">
<a href="producto2"><img class="foto"  src="img/apple-iphone-x--1.jpg" alt="Iphone X"></a>

<a href="producto2.php"><h2>Iphone X 256 gb</h2></a>
<p class="index">ARS $85.000</p>
</div>   
<div class="col-md-6 col-lg-4">
<a href="producto5"><img class="foto" src="img/samsung-galaxy-s9-001.jpg" alt="Samsung s9"></a>

<a href="producto5.php"><h2>Samsung S9</h2></a>
<p class="index">ARS $29.000</p>   
</div>
<div class="col-md-6 col-lg-4">
<a href="producto8"><img class="foto" src="img/moto-g6.jpg" alt="Motorola G6"></a>
 
<a href="producto8"><h2>Motorola G6</h2></a>
<p class="index">ARS $16.000</p>
</div>   
</div>
</div>
</section>

@endsection