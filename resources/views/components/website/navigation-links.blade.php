@if(request()->segment(1) === 'admin')

<a href="{{ route('home') }}">
    Ver el sitio web
</a>

<a href="{{ route('admin') }}">
    Publicaciones
</a>

<a href="{{ route('pdf-articles') }}">
    Artículos PDF
</a>

<a href="{{ route('account') }}" class="@if(request()->routeIs('account')) active @endif">
    Mi cuenta
</a>

@else

<a href="{{ route('home') }}" class="@if(request()->routeIs('home')) active @endif">
    Inicio
</a>
<a href="{{ route('about') }}" class="@if(request()->routeIs('about')) active @endif">
    Quiénes somos
</a>
<a href="{{ route('programs') }}" class="@if(request()->routeIs('programs')) active @endif">
    Programas
</a>
<a href="{{ route('knowMore') }}" class="@if(request()->routeIs('knowMore') || request()->routeIs('post')) active @endif">
    Conoce más
</a>
<a href="{{ route('contact') }}" class="@if(request()->routeIs('contact')) active @endif">
    Contacto
</a>

@endif

@auth
    <a href="{{ route('admin') }}" class="@if(request()->routeIs('posts.*')) active @endif">
        Administración
    </a>
@endauth