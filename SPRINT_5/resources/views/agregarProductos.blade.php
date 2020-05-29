@extends('layouts.plantilla')
@section('header_title')
    Agregar Producto - TecnoMovil
@endsection
@section('content')
    
<section class="administrador">

 {{-- AGREGAR PRODUCTO --}}
              
<br>  
<h1>AGREGAR PRODUCTOS</h1>
<p>Por favor complete todo los campos</p>
@include('error')
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
          <input type="file" class="" name="foto" id="foto"  required>
        </div>
        <br><br>
        <div class="form-group col-md-7 m-auto">
          <label for="foto1"> Imagen:</label>
          <br>
          <input type="file" class="" name="foto1" id="foto1"  >
        </div>
        <br><br>
        <div class="form-group col-md-7 m-auto">
          <label for="foto2"> Imagen:</label>
          <br>
          <input type="file" class="" name="foto2" id="foto2"  >
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
        <div class="boton">
           <button type="submit" name="submit" class="btn btn-dark">GUARDAR</button> 
        </div>
        
        </form>
        <br><br>
              
          
       
        
      

</section>

@endsection