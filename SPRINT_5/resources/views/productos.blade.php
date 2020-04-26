@extends('layouts.plantilla')
@section('header_title')
    Productos - TecnoMovil
@endsection
@section('content')
    
   
    <!--  SECCION  -->
    <section>
    <br><br>
    <div  class="row">
        
      <section>
        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
                <div class="col-md-4 col-lg-3">
                    <a href="producto?id=<?=$producto['id']?>"><img src="{{-- mostrar imagen db --}}" alt="logotipo" class="img-fluid" width="300px"></a> 
                    <a href="producto?id=<?=$producto['id']?>"><h2><?=$producto['modelo']?></h2></a>
                    <p>ARS <?= $productos['precio']?></p>
                
                </div>
            <?php endforeach; ?>
           
            
        </div>
    
        </div> 
    </section>

<section class="from-blog spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
  <div class="section-title from-blog__title">
      <h2>Nuestros productos</h2>
  </div>
</div>
</div>

<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="blog__item">
<div class="card" style="width: 18rem;">
  <img src="img/iphone-8-03.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iphone 8</h5>
    <p class="card-text">Smartphone Apple IPHONE 7 Plus Rosas Oro Ios 32GB Ios 5,5 "Touch ID"</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">$25000</li>
   
  </ul>
  <div class="card-body">
    
    <a href="#" class="card-link">COMPRAR</a>
  </div>
</div>
</div>
                </div>          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="card" style="width: 18rem;">
  <img src="img/iphone-8-03.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iphone 8</h5>
    <p class="card-text">Smartphone Apple IPHONE 7 Plus Rosas Oro Ios 32GB Ios 5,5 "Touch ID"</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">$25000</li>
   
  </ul>
  <div class="card-body">
    
    <a href="#" class="card-link">COMPRAR</a>
  </div>
</div>
</div>
</div>
                
</div>
</div>
</section>

</div>

</div> 
</section>
@endsection
