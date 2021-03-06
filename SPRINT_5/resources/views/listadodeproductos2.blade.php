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
  <a class="nav-item nav-link active" href="#">Descuentos</a>
  <a class="nav-item nav-link active" href="#">Formas de entregas</a>
</nav>


    <!--  SECCION  -->
    <section class="productos">

<div class="col-lg-12 col-md-5">


        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
          <div class="col-md-4 col-lg-4">
                <div class="card" style="width: 25rem;">
                <div class="card-body">
                <p class="card-title"><a href="producto/<?=$producto['id']?>"></p><p><?=$producto['marca']?> <?=$producto['modelo']?></p></a>
                  <div class="imgprod">
                <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
                </div>
                <p>ARS <?=$producto['precio']?></p>
                <button class="btn btn-dark">
                <a href="producto/<?=$producto['id']?>">Comprar</a>
                </button>
                
    
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






<section class="seccionproductos">
        <div class="containerproductos">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="filtrarportodo">
                        <div class="filtrarporbuscar">
                            <form action="#">
                                <input type="text" placeholder="Buscar...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="filtrarpor">
                            <h4>Filtrar por ...</h4>
                            <ul>
                                <li><a href="#">Marca</a></li>
                                <li><a href="#">Mayor precio</a></li>
                                <li><a href="#">Menor</a></li>
                                <li><a href="#">Populares (5)</a></li>
                                <li><a href="#">Economicos (9)</a></li>
                                
                            </ul>
                        </div>
                        <div class="losmasbuscados">
                            <h4>Los mas buscados</h4>
                        
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-10 col-md-7">
                
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="todoslosproductos">
                               
                                <div class="productosx3">
                                 <?php foreach($productos as $producto) : ?>
        
                <div class="card" style="width: 25rem;">
                <div class="card-body">
                <p class="card-title"><a href="producto/<?=$producto['id']?>"></p><p><?=$producto['marca']?> <?=$producto['modelo']?></p></a>
                  <div class="imgprod">
                <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
                </div>
                <p>ARS <?=$producto['precio']?></p>
                <button class="btn btn-dark">
                <a href="producto/<?=$producto['id']?>">Comprar</a>
                </button>
                
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
                                </div>
                            </div>
                        </div>
                       
                        <div class="center">
    {{$productos->links()}}
</div>
                    </div>
                </div>
         
    </section>
   




@endsection



el mismo codigo de arriba pero cambiado


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
  <a class="nav-item nav-link active" href="#">Descuentos</a>
  <a class="nav-item nav-link active" href="#">Formas de entregas</a>
</nav>


    <!--  SECCION  -->
  

<section class="seccionproductos">
<div class="containerproductos">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                        <div class="filtrarporbuscar">
                            <form action="#">
                                <input type="text" placeholder="Buscar...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="filtrarpor">
                            <h4>Filtrar por ...</h4>
                            <ul>
                                <li><a href="#">Marca</a></li>
                                <li><a href="#">Mayor precio</a></li>
                                <li><a href="#">Menor</a></li>
                                <li><a href="#">Populares (5)</a></li>
                                <li><a href="#">Economicos (9)</a></li>   
                            </ul>
                        </div>
                </div>   
<div class="row">
  <div class="col-lg-10 col-md-7">
      <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-6">
             <div class="productosx3">
                                 <?php foreach($productos as $producto) : ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="card" style="width: 25rem;">
                <div class="card-body">
                <p class="card-title"><a href="producto/<?=$producto['id']?>"></p><p><?=$producto['marca']?> <?=$producto['modelo']?></p></a>
                  <div class="imgprod">
                <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a>
                   </div>
                <p>ARS <?=$producto['precio']?></p>
                <button class="btn btn-dark">
                <a href="producto/<?=$producto['id']?>">Comprar</a>
                </button>
               </div>
               </div>
             </div>
               </div>
             </div>
</div>
  </div>
    </div>
           </div>
        


<?php endforeach; ?>
 </div>                       
</div>
<div class="center">
    {{$productos->links()}}
</div>

</section>
@endsection






editar perfill guardado por las dudas



@extends('layouts.plantilla')
@section('header_title')
    Mi Perfil - TecnoMovil

@endsection
@section('content')
    

      
    <section class="miperfil">
       

        
       
           
            <br>
            <br>
        <h1>Mi Perfil </h1>
       
        <ul>
                <li><strong>Nombre: </strong>{{ Auth::user()->name }} </li>
                <li><strong>Apellido: </strong>{{ Auth::user()->surname }} </li>
                <li><strong>Email: </strong>{{ Auth::user()->email }} </li>
            </ul>
            

           <div>
           {{-- <img src="/storage/{{$Perfil->fotoP}}" alt=""> --}}
           </div>
            <label for=""><b> Foto de Perfil:</b></label>
            <div class="text-center" width="200px">
            {{-- <img class="fotoperfil" src="archivos/<?=/* $usuario['id'] */?>.jpg" alt=""> --}}
            </div>

            {{--Aca errores --}}

            <hr>
         
        <br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editar">
  Editar mis datos
</button>

<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarLabel">Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('user.editar')}}" enctype="multipart/form-data">
          @csrf
            <p>Por favor complete todos los campos</p>
            
            <label for="name"><b>Nombre:</b></label>
            <br>
            <input type="text" placeholder="Escriba su Nombre" name="name" value="{{ Auth::user()->name }}" required>
                <br><br>
                <label for="surname"><b>Apellido:</b></label>
                <br>
            <input type="text" placeholder="Escriba su Apellido" name="surname" value="{{ Auth::user()->surname }}" required>
                <br><br>  
                <label for="psw"><b>Contraseña:</b></label>
                <br>
            <input type="password" placeholder="Escriba su contraseña" name="password" required>
            
            <br><br>
            <b> Cambiar foto</b><br><br>
            <input type="file" class="" name="foto" id="foto"  >
            <br><br>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="guardar">Guardar Cambios</button>
      
            <br><br>
        </form>
      </div>
    </div>
  </div>
</div>

<hr>
                
<section>

      {{--   <?php endif; ?>     --}}
        
</section>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection


nuevo



<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editar">
  Editar mis datos
</button>

<!-- Modal -->


<div class = "formularioayuda">

<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarLabel">Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('user.editar')}}" enctype="multipart/form-data">
          @csrf
      
        
        <form action={{route('contact')}} method="POST">
     {{ csrf_field() }}
         <input type="hidden" name="submitted" id="submitted" value="1">
                <div class="form-row">
                    <div class="form-group col-md-7 m-auto">
                        <label for="name"> Nombre</label>
                         <br>
                        <input type="text" class="form-control" placeholder="Nombre" name="name" id="name"   value="{{ Auth::user()->name }}" required>
                         <br>
                    </div>
                    
                    <div class="form-group col-md-7 m-auto">
                        <label for="apellido"> Apellido</label>
                         <br>
                         <input type="text" class="form-control" placeholder="Apellido" name="surname" value="{{ Auth::user()->surname }}" required>
              
                         <br>
                    </div>
                    <div class="form-group col-md-7 m-auto">
                        <label for="inputEmail4"> Email</label>
                        <input type="text" class="form-control" placeholder="Escriba su Apellido" name="surname" value="{{ Auth::user()->surname }}" required>
                <br><br>  
                <label for="psw"><b>Contraseña:</b></label>
                <br>
            <input type="password" class="form-control" placeholder="Escriba su contraseña" name="password" required>
                        
                        <br>
                         <b> Cambiar foto</b><br><br>
            <input type="file" class="" name="foto" id="foto"  >
            <br><br>
                    </div>
                    

                  <br><br>
                
                </div>
                {{-- onclick="alert('¡Su consulta fue enviada con exito, en breve le responderemos!')" --}}
               <div class="text-center">
              <button type="submit" class="btn btn-dark">  Guardar cambios  </button>
               </div>
            </form> 
            </div>   


      </div>
    </div>
  </div>
</div>

<hr>