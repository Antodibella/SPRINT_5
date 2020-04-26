@extends('layouts.plantilla')
@section('header_title')
    Administrador - TecnoMovil
@endsection
@section('content')
<section class="administrador">
<body class="administrador">
   <br>
   <br>
   
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#agregar">Agregar Productos</button>
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#editar">Editar Productos</button>
        <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#borrar">Borrar Productos</button>
      </div>
    <br><br><br> 
     {{-- <?php ?>
                
                @if($errores ?? ''): 
                <ul>
       @foreach ($errores as $error) 
        <li>
          {{error}}
        </li> 
        @endforeach
    </ul>
  @endif  --}}
  <div>
    para commit
  </div>
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
        
                 
  <p>Por favor complete todo los campos</p>
  <form class="agregarProducto" action="{{ route('productos.store')}}" method="post" enctype="multipart/form-data">  
    @csrf
    <input type="hidden" name="submitted" id="submitted" value="1">
    <div class="form-row">
      <div class="form-group col-md-7 m-auto">
      <label for="marca"> Marca:</label>
      <input type="name" class="form-control" name="marca" id="marca" value="" placeholder="Marca" required>
    </div>
    <div class="form-group col-md-7 m-auto">
      <label for="foto"> Imagen:</label>
      <br>
      <input type="file" class="" name="foto" id="foto" value=""  required>
    </div>
    <br><br>
    <div class="form-group col-md-7 m-auto">
      <label for="foto1"> Imagen:</label>
      <br>
      <input type="file" class="" name="foto1" id="foto1" value="" >
    </div>
    <br><br>
    <div class="form-group col-md-7 m-auto">
      <label for="foto2"> Imagen:</label>
      <br>
      <input type="file" class="" name="foto2" id="foto2" value="" >
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
    <br><br><br>
    </div>
    <button type="submit" name="submit" class="boton1">GUARDAR</button>
    </form>
    <br><br><br>
          
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

          <form method="POST" action="/borrarProducto">
            {{ csrf_field() }}
            <label for="inputState">Elegir Producto que desea borrar</label>
            
            <select id="borrar" name="borrar" value="{{$producto['id'] ?? ''}}" class="form-control">
              <?php foreach($productos as $producto) : ?>
              <option>{{$producto['id']}}</option>
              <?php endforeach; ?>

              <input type="hidden" name="id" value="{{$producto->id ?? ''}}">
              </select>
              <button type="submit" name="submit" class="boton1">BORRAR</button>

              <br><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>



</section>
@endsection