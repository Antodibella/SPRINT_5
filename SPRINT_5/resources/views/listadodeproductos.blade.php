@extends('layouts.plantilla')
@section('header_title')
    Productos - TecnoMovil
@endsection
@section('content')
    

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/lista de productos 1.jpg" class="d-block w-100" alt="lista1">
    </div>
    <div class="carousel-item">
      <img src="img/lista de productos 2.jpg" class="d-block w-100" alt="...">
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


    <!--  SECCION  -->
<section class="productos">
        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
                <div class="col-md-4 col-lg-4">
<div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <p class="card-title"><a href="producto/<?=$producto['id']?>"></p><p><?=$producto['marca']?> <?=$producto['modelo']?></p></a>
   <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
    <p>ARS <?=$producto['precio']?></p>
    <a href="#" class="btn btn-dark">Comprar</a>
  </div>
</div>




                
                    
                
                </div>
            <?php endforeach; ?>
           
            
            
        </div>

        
        <div class="center">
    {{$productos->links()}}
</div>
    </section>

@endsection