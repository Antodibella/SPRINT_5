@extends('layouts.plantilla')
@section('header_title')
    Editar Producto - TecnoMovil
@endsection
@section('content')
    


<section>
    <form class="editarProducto" action="{{ route('productos.editar',$producto)}}" method="post" enctype="multipart/form-data">  
        @csrf
        @method('put') 
        <input type="hidden" name="submitted" id="submitted" value="1">
        <div class="form-row">
          <div class="form-group col-md-7 m-auto">
          <label for="marca"> Marca:</label>
          <input type="name" class="form-control" name="marca" id="marca" value="{{$producto['marca']}}" placeholder="Marca">
        </div>
        <div class="form-group col-md-7 m-auto">
          <label for="foto"> Imagen:</label>
          <br>
          <input type="file" class="" name="foto" id="foto" value="{{$producto['foto']}}"  >
        </div>
        <br><br>
        <div class="form-group col-md-7 m-auto">
          <label for="foto1"> Imagen:</label>
          <br>
          <input type="file" class="" name="foto1" id="foto1" value="{{$producto['foto1']}}" >
        </div>
        <br><br>
        <div class="form-group col-md-7 m-auto">
          <label for="foto2"> Imagen:</label>
          <br>
          <input type="file" class="" name="foto2" id="foto2" value="{{$producto['foto2']}}" >
        </div>
        <br><br>
        <div class="form-group col-md-7 m-auto">
          <label for="modelo"> Modelo:</label>
          <input type="modelo" class="form-control" name="modelo" value="{{$producto['modelo']}}"  id="modelo" >
        </div>
        <div class="form-group col-md-7 m-auto ">
          <label for="exampleFormControlTextarea1">Caracteristicas</label>
        <textarea class="form-control" name="caracteristicas"  id="exampleFormControlTextarea1" rows="3" cols="80">
          {{$producto['caracteristicas']}}
        </textarea>
        </div>
        <div class="form-group col-md-7 m-auto">
          <label for="precio"> Precio:</label>
          <input type="precio" class="form-control" name="precio" value="{{$producto['precio']}}"  id="precio" >
        </div>
        <div class="form-group col-md-7 m-auto">
          <label for="strock"> Stock:</label>
          <input type="stock" class="form-control" name="stock" value="{{$producto['stock']}}"  id="stock" placeholder="Stock">
         </div>
        <br><br><br>
        </div>
        <button type="submit" name="submit" class="boton1">GUARDAR</button>
        </form>
</section>


@endsection
        