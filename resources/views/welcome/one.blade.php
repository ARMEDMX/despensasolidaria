@extends('menu.menu')

@section('contenido1')


<div class="container1">
    
     
    @guest
    <!-- Mensaje de bienvenida para usuarios no autenticados -->
    <h1>Bienvenido, por favor inicia sesión</h1>
    @else
    <!-- Mensajes condicionales para usuarios autenticados -->
    @if(auth()->user()->department === 'ATC')
    <h1>Bienvenido al Sistema Despensa Solidaria Atencion Ciudadana</h1>
    @elseif(auth()->user()->department === 'DIF')
    <h1>Bienvenido al Sistema Despensa Solidaria DIF</h1>
    @endif
    @endguest
    

</div> 
    

@endsection
