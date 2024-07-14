<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales para personalizar */
        body {
            background-color: #f8f9fa;
            padding-top: 5rem;
        }
        .card {
            margin-bottom: 30px;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Laravel App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reservas List') }}
            </h2>
        </x-slot>
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido a nuestra aplicación</h1>
            <p class="lead">Explore todas las funcionalidades que ofrecemos para gestionar sus eventos de manera eficiente.</p>
            <hr class="my-4">
            <p>Regístrese o inicie sesión para comenzar.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registrarse</a>
            <a class="btn btn-outline-primary btn-lg" href="{{ route('login') }}" role="button">Iniciar sesión</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://los40.com.ar/los40/imagenes/2017/12/29/musica/1514554255_620849_1514554626_gigante_normal.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Evento 1</h5>
                        <p class="card-text">Descripción del evento 1.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH1jtLLLSdMUhwwzd2_RKY8U7dUmg7KQiBmQ&s" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Evento 2</h5>
                        <p class="card-text">Descripción del evento 2.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.eluniverso.com/resizer/G8ekG2qLoRj5fJWUnkvzBiVZkk0=/696x392/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/GBYOG2OTORFRXMML6MWXFTOOCE.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Evento 3</h5>
                        <p class="card-text">Descripción del evento 3.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
