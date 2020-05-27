   <!--  BARRA DE INICIO -->
   <header>

    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="/index"><img src="/img/LOGO.png" alt="logotipo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="barradeinicio">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
     {{-- ($Auth->users()->isAdmin(1)) {}--}}
        <li class="nav-item active">
            <a class="nav-link" href="/administrador">Administrador <span class="sr-only"></span></a>
        </li>
  
        
    

    <li class="
    ">
    <a class="nav-link" href="/index">Inicio <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="/productos">Productos <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/ayuda" tabindex="-1" aria-disabled="true">Ayuda</a>
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
                        

                        <li>
                            <a class="fas fa-shopping-cart black"  href= "/cart" ></a>
                            </li>
                            
    <li class="nav-item dropdown">
    
    </form>
    </div>
    </ul>       
    </div>
    </div>
    </nav>
    </div>
    </header>