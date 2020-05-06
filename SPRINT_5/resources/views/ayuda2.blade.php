@extends('layouts.plantilla')
@section('header_title')
    Preguntas Frecuentes - TecnoMovil
@endsection
@section('content')
    

<section>



{{-- <div class="errores">
    @if(count($errores)) :    
                        <img src="img/atencion.png" alt="">      
                        <br><br>        
                        <h1>NO SE PUDO ENVIAR SU CONSULTA, REVISE:</h1><br>
                        <ul>
                        @foreach($errores->All() as $error)
                        <li><strong>{{$error}}}</strong></li>
                        @endforeach
                        </ul>
                    @endif
    </div> --}}



 <img id="preguntas" src="img/AYUDA.jpg" alt="pregunta" width="100%">
<br>
<br>
<br>
<br>
<div class="preguntasfrecuentes">

<div class="row">
<div class="col-md-4">
<ul>
<hr>
<li> <a href="p1" data-toggle="modal" data-target="#p1">¿Los productos se encuentran en stock?</a></li>
<hr> 
<li> <a href="p2" data-toggle="modal" data-target="#p2">¿Hacen envíos?</a></li>
<hr> 
<li> <a href="p3" data-toggle="modal" data-target="#p3">¿Cuáles son los horarios de atención?</a></li>
<hr> 
<li> <a href="p9" data-toggle="modal" data-target="#p10">¿Tengo que registrarme para comprar?</a></li>
<hr>
</div>
        <div class="col-md-4">
 <hr>       
<li> <a href="p4" data-toggle="modal" data-target="#p4">¿Son precios Finales o más IVA?</a></li>
<hr> 
<li> <a href="p5" data-toggle="modal" data-target="#p5">¿Entregan factura y garantía?</a></li>
<hr> 
<li> <a href="p6" data-toggle="modal" data-target="#p6">¿Hacen factura A? ¿Cómo la solicito?</a></li>
<hr>
<li> <a href="p9" data-toggle="modal" data-target="#p11">¿Los precios son para la tienda online?</a></li>
<hr> 
</div>
        <div class="col-md-4">
        <hr>
<li> <a href="p7" data-toggle="modal" data-target="#p7">¿Como descargar mi factura desde la PC?</a></li>
<hr> 
<li> <a href="p8" data-toggle="modal" data-target="#p8">¿Como realizo un pedido?</a></li>
<hr> 
<li> <a href="p9" data-toggle="modal" data-target="#p9">¿Que es la factura electronica?</a></li>
<hr>
<li> <a href="p9" data-toggle="modal" data-target="#p12">¿Tiene costo el envio?</a></li>
<hr>
</div>

</ul>

</div>
</div>
</div>




<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p1">
   
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Los productos se encuentran en stock?</h2>
          <br>
          <hr>
            <p>Sí, todos los productos publicados se encuentran en existencia en nuestro local.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p2">
   
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Hacen envíos?</h2>
          <br>
          <hr>
            <p>Sí, por medio de Transporte de carga, Bus, Oca, Correo Argentino, o por donde elija o más le convenga al cliente. El costo del envío lo abona el cliente al recibir el producto en caso de que el servicio lo permita. De lo contrario el cliente lo tendrá que abonar previamente.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p3">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Cuáles son los horarios de atención?</h2>
          <br>
          <hr>
            <p>Los horarios de atención son de lunes a viernes de 8:30 a 17hs, y sábados de 9 a 12:30hs.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p4">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Son precios Finales o más IVA?</h2>
          <br>
          <hr>
            <p>Todos los precios son finales con IVA incluido.</p>
              </div>
  </div>
</div>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p5">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Entregan factura y garantía?</h2>
          <br>
          <hr>
            <p>En todas las ventas que realizamos se entrega factura electrónica fiscal. Bajo ningún concepto ni excepción realizamos ventas sin factura.  
                La garantía de todos los productos es de 12 meses.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p6">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Hacen factura A? ¿Cómo la solicito?</h2>
          <br>
          <hr>
            <p>Si, por supuesto. En las observaciones del pedido tendrás aclarar que es con factura A y deberás enviar el número de CUIT correspondiente.
                    Para resolver otro tipo de consultas podés comunicarte al correo ventas@digitalhouse.com.ar o a los teléfonos 0341-4823948 / +543401596707 en los horarios de atención al público.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p7">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>¿Como descargar mi factura desde la PC?</h2>
          <br>
          <hr>
            <p> Podés descargar tus facturas desde tu PC ingresando a: .</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p8">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>¿Como realizo un pedido?</h3>    
          <br>
          <hr>
              <p> Para armar un pedido simplemente agregar los productos al carro de compras y al finalizar pones comprar elegís el medio de pago.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p9">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>¿Que es la factura electronica?</h3>    
          <br>
          <hr>
              <p> Menos papel, más beneficios. La factura electrónica es el servicio que te da acceso directo desde tu celular.
              No necesitás imprimirla. La puedes guardar en tu PC.</p>
              </div>
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p10">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>¿Tengo que registrarme para comprar?</h3>    
          <br>
          <hr>
              <p> Si ya sos Cliente podés ingresar con tu usuario y contraseña. Si aún no sos Cliente, tenés que registrarte como Cliente Nuevo.</p>
              </div>
  </div>
</div>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p11">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>¿Los precios de la tienda son exclusivos para la tienda online?</h3>    
          <br>
          <hr>
              <p> Sí, los precios de los equipos de la Tienda son exclusivos para compras realizadas por este canal.</p>
              </div>
  </div>
</div>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="p12">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>¿Los precios de la tienda son exclusivos para la tienda online?</h3>    
          <br>
          <hr>
              <p> No, el envío es sin costo a todo el país..</p>
              </div>
  </div>
</div>
</div>

<br>


<div class="row" >
    <div class="col-md-6">
<button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#PAGOS1">PAGOS EN FORMA ONLINE</button>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="PAGOS1">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> </button>
            <div class="modal-content">
        
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
</div>

</div>
  <div class="col-md-6">
<button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#pagos2">PAGOS EN NUESTRO LOCAL</button>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="pagos2">
<div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3>Pagos en forma online</h3>    
          <br>
          <hr>
              <li> Efectivo, Débito, Transferencia o depósito bancario. En todos estos casos se toma el mismo precio publicado en nuestra web</li>
    <li> Transferencia o depósito bancario.</li>
    <br>
    <h4> Tarjetas de creditos</h4> 
            <br>
            <ul>
                <li>
                    <strong>1 cuota</strong> 5% + sobre el precio publicado 
                </li>
                <li>
                    <strong>3 cuotas</strong> 20% + sobre el precio publicado
                </li>
                <li>
                    <strong>6 cuotas</strong> 30% + sobre el precio publicado
                </li>
            </ul>
            <br>
              </div>
  </div>
</div>
</div>
</div>

</div>
</div>
</div>
<hr>
         <!--  Formulario anterior sin mail -->   

         <div class = "formularioayuda">
         <h1 class="forayuda"> Dejanos tu consulta </h1>
         <br>
        
        <!-- <form action="mailto:nicomanzanel@hotmail.com" method="get" enctype="text/plain">  -->   
        <form action={{route('contact')}} method="POST">
     {{ csrf_field() }}
         <input type="hidden" name="submitted" id="submitted" value="1">
                <div class="form-row">
                    <div class="form-group col-md-7 m-auto">
                        <label for="name"> Nombre</label>
                         <br>
                        <input type="name" class="form-control" name="name" id="name" value="" placeholder="Nombre">
                         <br>
                    </div>
                    
                    <div class="form-group col-md-7 m-auto">
                        <label for="apellido"> Apellido</label>
                         <br>
                        <input type="apellido" class="form-control" name="surname" value=""  id="surname" placeholder="Apellido">
                         <br>
                    </div>
                    <div class="form-group col-md-7 m-auto">
                        <label for="inputEmail4"> Email</label>
                        <input type="email" class="form-control" name="email" value=""  id="inputEmail4" placeholder="Email">
                        <br>
                    </div>
                    <div class="form-group col-md-7 m-auto ">
                            <label for="exampleFormControlTextarea1">Envianos tu consulta</label>
                             <br>
                            <textarea class="form-control" name="msg" value=""  id="exampleFormControlTextarea1" rows="3" cols="80" placeholder="Escribe tu consulta aqui..."></textarea>
                          </div>

                  <br><br>
                
                </div>
               
               <div class="text-center">
              <button type="submit" class="btn btn-dark">  Enviar  </button>
               </div>
            </form> 
            </div>   
            <br><br>





        </section>   
        @endsection
        