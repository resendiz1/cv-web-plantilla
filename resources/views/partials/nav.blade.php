  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-md-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column ">

    <nav class="nav-menu">
      <ul>
      <li class="{{activos('home')  }}"><a href="{{route('home')}}"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
      <li class="{{activos('about') }}"><a href="{{route('about')}}"><i class="bx bx-user"></i> <span>Acerca de</span></a></li>
      <li class="{{activos('experiencia')}}"><a href="{{route('experiencia')}}"><i class="bx bx-file-blank"></i> <span>Educación y experiencia laboral</span></a></li>
      <li class="{{activos('project.index')}}"><a href="{{route('project.index')}}"><i class="bx bx-book-content"></i> <span>Portafolio</span></a></li>
      <li class="{{activos('skills')}}"><a href="{{route('skills')}}"><i class="bx bx-laptop"></i> <span>Habilidades</span></a></li>
      @guest 
      <li  class="{{activos('login')}}"><a href="{{route('login')}}"><i class="bx bx-key"></i> <span>Entrar</span></a></li> @endguest
      <li class="{{activos('contacto')}}"><a href="{{route('contacto')}}"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>
      @auth
      <li class="{{activos('project.create')}}"><a href="{{route('project.create')}}"><i class="bx bx-plus"></i> <span>Nuevo proyecto</span></a></li>@endauth 
        @auth  
      <li>
        <a  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         <i class="bx bx-log-out"></i>
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
      </li>
      @endauth



      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->