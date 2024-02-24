<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css?1.0') }}" media="all" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Presidencia Municipal de Nava</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            
            <div id="sidebar" class="d-flex flex-column justify-content-between col-2 bg-dark min-vh-100">
                <div class="mt-4">

                    <div class="logo">
                        {{-- <a href=""
                            class="text-white d-none d-md-inline text-decoration-none d-flex align-items-center ms-4"
                            role="button">
                            
                            <span class="fs-5">Despensa Solidaria</span>
                        </a> --}}
                        <img src="/images/logo.jpeg" alt="" width="100px">
                    </div>

                    <hr class="text-white d-none d-md-block">

                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0 " id="menu">
                        <li class="nav-item my-md-1 my-2 ">
                            <a href="/" class="nav-link text-white text-center text-sm-start" aria-current="page">
                                <i class="fa fa-house"></i>
                                <span class="ms-2 d-none d-lg-inline ">Home</span>
                            </a>
                        </li>

                        <li class="nav-item my-md-1 my-2">  
                                <!-- Si el usuario ha iniciado sesión, llevarlo a la página de la agenda -->
                                <a href="" class="nav-link text-white text-center text-sm-start" aria-current="page">
                                    <i class="fa-solid fa-calendar-check"></i>
                                    <span class="ms-2 d-none d-lg-inline">Agenda</span>
                                </a>
                        </li>
                    </ul>

                </div>

                <div>
                    @auth
                        <div class="dropdown open">
                            <button class="btn border-none outline-none text-white dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> <span class="ms-1 d-none d-md-inline">
                                    {{ current(explode(' ', Auth::user()->name)) }}</span>
                            </button>
                            <ul class="nav-pills dropdown-menu dropdown-menu bg-dark">
                                {{-- <li><a class="dropdown-item text-white " href="{{ route('profile.edit') }}">Perfil</a></li> --}}
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <a class="dropdown-item text-white " href=""
                                            onclick="event.preventDefault(); this.closest('form').submit();">Cerrar
                                            Sesion</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                    @guest
                        <div>
                            <a href="/login" class="btn border-none outline-none text-white">
                                <i class="fa fa-user"></i><span class="ms-1 d-none d-md-inline">Iniciar Sesion</span>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>


            <!-- Contenido Principal -->
            <div id="plantilla">

                <div class="col">
                    @yield('contenido1')
                </div>

            </div>






            <script src="/public/js/app.js"></script>

        </div>
    </div>


    
</body>
</html>