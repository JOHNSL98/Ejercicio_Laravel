@extends('templates.main')
@section('title', 'Actualizar')

@section('content')
    <span> <h1>View - Actualizar Producto</h1> </span>
    <br>
    <label>Id Producto: </label>
    <input type="text" name="id_producto" ><br>

    <label>Nombre Producto: </label>
    <input type="text" id="nombre_producto" name="nombre_producto" ><br>
        
    <label>Precio Producto: </label>
    <input type="text" id="precio_producto" name="precio_producto"><br>

    <label>Stock: </label>
    <input type="text" id="stock" name="stock"><br>

    <br>
    <button>Actualizar</button>
@endsection
