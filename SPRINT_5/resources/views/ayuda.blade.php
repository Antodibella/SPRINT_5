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
<li> <A href="p1" data-toggle="modal" data-target="#p1">¿Los productos se encuentran en stock?</A></li>
<hr> 
<li> <A href="p2" data-toggle="modal" data-target="#p2">¿Hacen envíos?</A></li>
<hr> 
<li> <A href="p3" data-toggle="modal" data-target="#p3">¿Cuáles son los horarios de atención?</A></li>
<hr> 
<li> <A href="p9" data-toggle="modal" data-target="#p10">¿Tengo que registrarme para comprar?</A></li>
<hr>
</div>
        <div class="col-md-4">
 <hr>       
<li> <A href="p4" data-toggle="modal" data-target="#p4">¿Son precios Finales o más IVA?</A></li>
<hr> 
<li> <A href="p5" data-toggle="modal" data-target="#p5">¿Entregan factura y garantía?</A></li>
<hr> 
<li> <A href="p6" data-toggle="modal" data-target="#p6">¿Hacen factura A? ¿Cómo la solicito?</A></li>
<hr>
<li> <A href="p9" data-toggle="modal" data-target="#p11">¿Los precios son exclusivos para la tienda online?</A></li>
<hr> 
</div>
        <div class="col-md-4">
        <hr>
<li> <A href="p7" data-toggle="modal" data-target="#p7">¿Como descargar mi factura desde la PC?</A></li>
<hr> 
<li> <A href="p8" data-toggle="modal" data-target="#p8">¿Como realizo un pedido?</A></li>
<hr> 
<li> <A href="p9" data-toggle="modal" data-target="#p9">¿Que es la factura electronica?</A></li>
<hr>
<li> <A href="p9" data-toggle="modal" data-target="#p12">¿Tiene costo el envio?</A></li>
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
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><h3>Pago en forma online</h3>    
          <br>
          <hr>
              <li> Plan Ahora 12 20%+ A Través de TODOPAGO</li>
    <li> Transferencia o depósito bancario.</li>
    <li> Transferencia o depósito bancario.</li>
    <p>En todos estos casos se toma el mismo precio publicado en nuestra web</p>
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
          <h2><h3>Pagos en forma online</h3>    
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


<hr>
         <!--  Formulario  -->   

         
         <form class="formularioregistro" action="" method="post">  
         <input type="hidden" name="submitted" id="submitted" value="1">
                <div class="form-row">
                    <div class="form-group col-md-7 m-auto">
                        <label for="name"> Nombre</label>
                        <input type="name" class="form-control" name="name" id="name" value="" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group col-md-7 m-auto">
                        <label for="apellido"> Apellido</label>
                        <input type="apellido" class="form-control" name="surname" value=""  id="surname" placeholder="Apellido">
                    </div>
                    <div class="form-group col-md-7 m-auto">
                        <label for="inputEmail4"> Email</label>
                        <input type="email" class="form-control" name="email" value=""  id="inputEmail4" placeholder="Email">
                    </div>
                    <br>
                    <div class="form-group col-md-7 m-auto ">
                            <label for="exampleFormControlTextarea1">Envianos tu consulta</label>
                            <textarea class="form-control" name="consulta" value=""  id="exampleFormControlTextarea1" rows="3" cols="80"></textarea>
                          </div>
                  <br><br>
                  
                  
                </div>
              <button type="submit" name="submit" class="boton1">Enviar</button>
            </form>    
        </section>   
        @endsection
        