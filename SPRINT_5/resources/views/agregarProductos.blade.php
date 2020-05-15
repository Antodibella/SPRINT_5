<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title> </title>

</head>
<body>

<!--  BARRA DE INICIO -->
   <header>

    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="/index"><img src="/img/LOGO.png" alt="logotipo" class="logoadm"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="barradeinicio1">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item active">
    <a class="nav-link" href="/index">Inicio <span class="sr-only"></span></a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalogo</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Productos</a>
      <a class="dropdown-item" href="#">Alertas de stock</a>
  </li>
    <li class="nav-item active">
    <a class="nav-link" href="/productos">Pedidos <span class="sr-only"></span></a>
    </li>
   
    
       @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/miperfil"><p> Mi Perfil</p></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <p>  {{ __('Logout') }}</p>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        

                        
                            
    <li class="nav-item dropdown">  
    
    </form>
    </div>
    </ul>       
    </div>
    </div>
    </nav>
    </div>
    </header>
<section class="administrador">

 {{-- AGREGAR PRODUCTO --}}
              
<br>  
<h1>AGREGAR PRODUCTOS</h1>
<p>Por favor complete todo los campos</p>
@if($errors->any()) 
    <ul>
       @foreach ($errors as $error) 
        <li>
          {{error}}
        </li> 
        @endforeach
    </ul>
  @endif 
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

     <!--  BARRA DE PIE DE PAGINA  -->
 <footer class="page-footer font-small black pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5>TecnoMóvil</h5>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">CONTACTO</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="/quienessomos">Sobre nosotros</a>
            </li>
            <li>
              <a href="/register">Registrarse</a>
            </li>
            <li>
              <a href="/ayuda">Ayuda</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
 
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">REDES SOCIALES</h5>
  
          <ul class="list-unstyled">
           <li>
             <a href="http://web.whatsapp.com"><i class="fab fa-whatsapp"></i>  &nbsp;&nbsp;  TecnoMovil</a>
           </li>
            <li>
              <a href="http://instagram.com"><i class="fab fa-instagram"></i>  &nbsp;  TecnoMovil_ok</a>
            </li>
            <li>
              <a href="http://facebook.com"><i class="fab fa-facebook-f"></i> &nbsp;&nbsp;  TecnoMovil_ok</a>
            </li>
            <li>
              <a href="http://linkedin.com"><i class="fab fa-linkedin"></i>  &nbsp;&nbsp;  LinkdIn</a>
            </li>
          </ul>
  
       </div>
 
        
  
      </div>
      
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><p class="foot">© 2020 Copyright</p>
      <a href="/index"> TecnoMovil - Todos los derechos reservados</a>
    </div>
  
 
  <!-- Footer -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
     </footer>  
 
     <!-- Footer -->
     </body>
 </html>