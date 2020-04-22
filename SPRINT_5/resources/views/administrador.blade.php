@include('header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Administrador - Tecno Movil</title>
    </head>
<body class="administrador">
   <br>
   <br>
   
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#agregar">Agregar Productos</button>
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#editar">Editar Productos</button>
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#borrar">Borrar Productos</button>
      </div>
    <br><br><br>
   <img class="localadmin" src="/img/local.jpg" alt="" width="100%">
   
   
   
  {{-- AGREGAR PRODUCTO --}}
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="agregar">
   
           <div class="modal-dialog modal-xl">
        
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                <h1>AGREGAR PRODUCTOS</h1>
         {{--  <ul>
       @foreach ($errores as $error) 
        <li>
            {{error}}
        </li> 
        @endforeach
    </ul>
  
        
    @endforeach
      --}}
                 
              <p>Por favor complete todo los campos</p>
              <form class="agregarProducto" action="" method="post" enctype="multipart/form-data">  
                <input type="hidden" name="submitted" id="submitted" value="1">
                        <div class="form-row">
                           <div class="form-group col-md-7 m-auto">
                               <label for="marca"> Marca:</label>
                               <input type="name" class="form-control" name="marca" id="marca" value="" placeholder="Marca" required>
                           </div>
                           <div class="form-group col-md-7 m-auto">
                            <label for="imagen"> Imagen:</label>
                            <br>
                            <input type="file" class="" name="imagen" id="marca" value=""  required>
                        </div>
                        <br><br>
                           <div class="form-group col-md-7 m-auto">
                               <label for="modelo"> Modelo:</label>
                               <input type="modelo" class="form-control" name="modelo" value=""  id="modelo" placeholder="Modelo" required>
                           </div>
                           <div class="form-group col-md-7 m-auto ">
                                   <label for="exampleFormControlTextarea1">Caracteristicas</label>
                                   <textarea class="form-control" name="caracteristicas" value=""  id="exampleFormControlTextarea1" rows="3" cols="80"></textarea>
                                 </div>
                           <div class="form-group col-md-7 m-auto">
                            <label for="precio"> Precio:</label>
                            <input type="precio" class="form-control" name="precio" value=""  id="precio" placeholder="Precio">
                        </div>
                        <div class="form-group col-md-7 m-auto">
                            <label for="strock"> Stock:</label>
                            <input type="stock" class="form-control" name="stock" value=""  id="stock" placeholder="Stock">
                        </div>
                           <br>
                           
                         <br><br>
                         
                         
                       </div>
                     <button type="submit" name="submit" class="boton1">GUARDAR</button>
                   </form>
                   <br> 
              
        
              <br><br>
          
        </div>
      </div>
    </div>
  </div>
   <!-- EDITAR PRODUCTO -->
   <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="editar">
        
    <div class="modal-dialog modal-xl">
  
<div class="modal-content">
<form method="POST" action="/administrador" enctype="multipart/form-data">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <h1>EDITAR PRODUCTOS</h1>

  <br>
    <p>Por favor complete todo los campos</p>

    <p>lista de productos </p>
    
    <button type="submit" name="submit" class="boton1">GUARDAR</button>

    <br><br>
</form>
</div>
</div>
</div>
</div>

{{--   BORRAR PRODUCTOS --}} 
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="borrar">
   
    <div class="modal-dialog modal-xl">
 
<div class="modal-content">
 <div class="modal-body">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
         <h1>BORRAR PRODUCTOS</h1>

          <form method="POST" action="administrador" enctype="multipart/form-data">
            
              <p>Por favor complete todo los campos</p>
              
              <button type="submit" name="submit" class="boton1">BORRAR</button>

              <br><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@include('footer')