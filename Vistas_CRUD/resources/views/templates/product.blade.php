<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default') Alta de Producto</title>
    <link  rel="stylesheet" href="{{ asset('plugins2/css/mycss.css') }}">
    <link  rel="stylesheet" href="{{ asset('plugins2/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('plugins2/css/main.css') }}">
    <link  rel="stylesheet" href="{{ asset('plugins2/css/opaco.css') }}">
    <link  rel="stylesheet" href="{{ asset('plugins2/css/estilos.css') }}">
    </head>
<body>
    <header>
        <section id="menu">
            <ul>
                <a href="{{URL::to('/leerview')}}">Productos</a>
                <a href="{{URL::to('/crearview')}}">Crear</a>
                <a href="{{URL::to('/actualizarview')}}">Actualizar</a>
                <a href="{{URL::to('/borrarview')}}">Borrar</a>
            </ul>
        </section>
    </header>
    <div class="todo">
    
        <div id="cabecera">
            <img src="{{ asset('plugins2/img/swirl.png') }}" width="1188" id="img1">
            
        </div>
        
        <div id="contenido">
            <div style="background trans">
                @yield('content')
            </div>
        </div>
        
        <div id="footer">
            <img src="{{ asset('plugins2/img/swirl2.png') }}" id="img2">
        </div>

    </div>
</body>
</html>