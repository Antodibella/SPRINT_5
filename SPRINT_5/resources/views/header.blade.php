   <!--  BARRA DE INICIO -->
   <header>

    <nav class="navbar navbar-expand-lg navbar-light ">
    <a href="/index"><img src="/img/LOGO.png" alt="logotipo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="barradeinicio">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item active">
    <a class="nav-link" href="/index">INICIO <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="/productos">PRODUCTOS <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/ayuda" tabindex="-1" aria-disabled="true">AYUDA</a>
    </li>
    <li>
    <a class="fas fa-shopping-cart black"  href= "/carrito" ></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="login" tabindex="-1" aria-disabled="true"><img src="img/usuario.png" alt="" width="25px"></a>
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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