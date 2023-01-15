<header>
    <h1>Coders Free</h1>
    <nav>
      <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active': ''}}">Home</a></li>
        {{-- La clase va a marcar como active para todas las secciones de cursos --}}
        <li><a href="{{route('courses.index')}}" class="{{request()->routeIs('courses.*') ? 'active': ''}}">Cursos</a></li>
        <li><a href="{{route('about-us')}}" class="{{request()->routeIs('about-us') ? 'active': ''}}">Nosotros</a></li>
      </ul>
    </nav>
  </header>