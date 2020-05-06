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