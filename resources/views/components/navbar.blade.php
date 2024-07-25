<nav class="bg-slate-400 px-5">
  <ul class="flex flex-row justify-around max-w-3xl m-auto [&>li]:p-2">
    <li class="{{ setActivo('inicio') }}"><a href="/">Inicio</a></li>
    <li class="{{ setActivo('persona.*') }} {{ setActivo('personas.*') }}"><a href="/personas">Personas</a></li>
    <li class="{{ setActivo('contacto') }}"><a href="/contacto">contacto</a></li>
    @guest
      <li class="{{ setActivo('login') }}"><a href="{{ route('login')}}">Login</a></li>
    @else
      <li class="{{ setActivo('logout') }}">
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit">Logout</button>
        </form>
      </li>
    @endguest
  </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
  @csrf
</form>