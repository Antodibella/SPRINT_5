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

<!--  Barra de medios de pago , descuentos y entregas -->

<nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link active" href="#" data-toggle="modal" data-target="#formap">Medios de pagos</a>
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="formap">
<div class="modal-dialog modal-xl">
           
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="accordion" id="accordionExample">

  <!--  visa-->

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <img id="visa" src="img/visa.jpg" alt="visa" width="18%"> <p>Hasta 12 cuotas sin interes<p> 
        </button></h2>
      
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
     <p>Cuotas</p>
   <ul><hr>
   <li> 12 cuotas</li><hr> 
   <li> 6 cuotas</li>
  <hr> 
  <li> 1 cuota</li>
  <hr> 
  </ul>
      
       Oferta válida en Argentina para cambio de terminales en Tienda en todos los productos solo para lineas pospago del 01/05/2020 al 31/05/2020. 12 cuotas sin interés sólo para productos Android, no válido para Apple. Sólo para tarjetas Visa emitidas por entidades bancarias en la República Argentina. Quedan excluidas del diferimiento las tarjetas comerciales, purchasing, agro, business card, tarjetas regalo y prepagas. Naranja Visa sólo puede financiar en 1 o 6 cuotas. Consulte con su banco emisor la eventual aplicación de cargos y/o seguros asociados a la operatoria en cuotas. Sólo para equipos facturados por AMX Argentina S.A.
      </div>
    </div>
  </div>
<!--  mastercard -->

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img id="mastercard" src="img/mastercard.jpg" alt="mastercard" width="15%"><p>Hasta 12 cuotas sin interes<p> 
        </button></h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <ul>
     <p>Cuotas</p>
   <ul>
<hr>
<li> 12 cuotas</li>
<hr> 
<li> 6 cuotas</li>
<hr> 
<li> 1 cuota</li>
<hr> 
</ul>
        Oferta válida en Argentina para cambio de terminales en Tienda en todos los productos solo para lineas pospago del 01/05/2020 al 31/05/2020. 12 cuotas sin interés sólo para productos Android, no válido para Apple. Sólo para tarjetas Visa emitidas por entidades bancarias en la República Argentina. Quedan excluidas del diferimiento las tarjetas comerciales, purchasing, agro, business card, tarjetas regalo y prepagas. Naranja Visa sólo puede financiar en 1 o 6 cuotas. Consulte con su banco emisor la eventual aplicación de cargos y/o seguros asociados a la operatoria en cuotas. Sólo para equipos facturados por AMX Argentina S.A.
      </div>
    </div>
  </div>

  <!--  american -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img id="american" src="img/american.jpg" alt="american" width="12%"><p>Hasta 12 cuotas sin interes<p> 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
       
      <div class="card-body">
     <p>Cuotas</p>
   <ul>
<hr>
<li> 12 cuotas</li>
<hr> 
<li> 6 cuotas</li>
<hr> 
<li> 1 cuota</li>
<hr> 
</ul>
       Oferta válida en Argentina para cambio de terminales en Tienda en todos los productos solo para lineas pospago del 01/05/2020 al 31/05/2020. 12 cuotas sin interés sólo para productos Android, no válido para Apple. Sólo para tarjetas Visa emitidas por entidades bancarias en la República Argentina. Quedan excluidas del diferimiento las tarjetas comerciales, purchasing, agro, business card, tarjetas regalo y prepagas. Naranja Visa sólo puede financiar en 1 o 6 cuotas. Consulte con su banco emisor la eventual aplicación de cargos y/o seguros asociados a la operatoria en cuotas. Sólo para equipos facturados por AMX Argentina S.A.

    </div>
    </div>
    </div>

</div>
</div>
</div>
</div>
</div>
  <a class="nav-item nav-link active" href="#" data-toggle="modal" data-target="#descuentos" >Descuentos</a>
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="descuentos">
<div class="modal-dialog modal-xl">
<div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="accordion" id="accordionExample">
<img id="descuentos" src="img/DESCUENTOs.png" alt="descuentos" width="40%" >
          <h3>¡ATENCION! </h3>
          <h4>¡Todos los descuentos en un solo lugar!</h4>
<h4>Cupones, códigos promocionales y ofertas para todas las tiendas y marcas en Argentina.</h4>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

  <a class="nav-item nav-link active" href="#" data-toggle="modal" data-target="#formasdeentrega">Formas de entregas</a>
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="formasdeentrega">
<div class="modal-dialog modal-xl">
<div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="accordion" >
<h4>Formas de entregas</h4>
<hr>
<i class="fas fa-warehouse"> Retirarlo por el local.</i>
   <BR>
          
          <i class="fas fa-truck"> Te lo llevamos a tu domicilio</i>
       

          


</div>
</div>
</div>
</div>
</div>
</div>
</div>

</nav>


    <!--  SECCION  -->
    <section class="productos">

<div id="rowproductos" class="col-lg-12 col-md-5">


        <br><br>
        <div  id="rowproductos" class="row">
            <?php foreach($productos as $producto) : ?>
            
          <div class="col-md-4 col-lg-4">
                <div class="card" style="width: 25rem;">
                <div class="card-body">
                <p class="card-title"><a href="producto/<?=$producto['id']?>"></p><p><?=$producto['marca']?> <?=$producto['modelo']?></p></a>
                  <div class="imgprod">
                <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
                </div>
                <p>ARS <?=$producto['precio']?></p>
                
                <a href="producto/<?=$producto['id']?>"><button class="btn btn-dark">Comprar </button></a>
               
                
    
          </div>
          </div>
          </div>
            <?php endforeach; ?>
   </div>
</div>
  <br>     
<div class="center">
    {{$productos->links()}}
</div>
</div>
<br>
    </section>





@endsection
