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
                <li><strong>Nombre: </strong>{{-- aca van datos de la db --}}</li>
                <li><strong>Apellido: </strong>{{-- aca van datos de la db --}}</li>
                <li><strong>Email: </strong>{{-- aca van datos de la db --}}</li>
                <li><strong>Usuario: </strong>{{--datos--}}</li>
            </ul>
            

           <div>
           {{-- <img src="/storage/{{$Perfil->fotoP}}" alt=""> --}}
           </div>
            <label for=""><b> Foto de Perfil:</b></label>
            <div class="text-center" width="200px">
            {{-- <img class="fotoperfil" src="archivos/<?=/* $usuario['id'] */?>.jpg" alt=""> --}}
            </div>
            {{-- <?php endif;?>
            <?php if(count($errores)) : ?>                   
                    <ul>
                        <?php foreach($errores as $error): ?>
                            <li><strong>{{$error}}</strong></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?> 
            --}}
            <hr>
        <form action="miperfil" method="post"> <input type='submit' class="btn btn-secondary" name='salir' value='Salir' /> </form>   
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
        <form method="POST" action="miperfil" enctype="multipart/form-data">
     
            <p>Por favor complete todo los campos</p>
            
            <label for="name"><b>Nombre:</b></label>
            <br>
            <input type="text" placeholder="Escriba su Nombre" name="name" value="<?= $usuario['nombre'] ?>" required>
                <br><br>
                <label for="surname"><b>Apellido:</b></label>
                <br>
            <input type="text" placeholder="Escriba su Apellido" name="surname" value="<?= $usuario['apellido'] ?>" required>
                <br><br>  
                <label for="psw"><b>Contraseña:</b></label>
                <br>
            <input type="password" placeholder="Escriba su contraseña" name="password" required>
                <br><br>
            <label for="psw"><b>Contraseña:</b></label>
            <br>
            <input type="password" placeholder="Confirme su contraseña" name="z" required>
            <br><br>
            <b> Cambiar foto</b><br><br>
                <input type="file" name="fotoP" value="">
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