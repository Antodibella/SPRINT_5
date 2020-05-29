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
            <br>
              
               <img src="/storage/{{ Auth::user()->foto }}" alt="" class="fotoperfil" width="200px"> 
            

            @include('error')

            <hr>
         
        <br>

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
                        <input type="text" class="form-control" placeholder="Escriba su Apellido" name="surname" value="{{ Auth::user()->email }}" required>
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
              <button type="button" class="btn btn-dark">  Guardar cambios  </button>
               </div>
            </form> 
            </div>   


      </div>
    </div>
  </div>
</div>

<hr>


      {{--   <?php endif; ?>     --}}
        
</section>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection