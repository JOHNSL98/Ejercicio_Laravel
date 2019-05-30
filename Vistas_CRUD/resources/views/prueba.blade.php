@extends('templates.main')
@section('title', 'Vista')

@section('content')
    <span><h1>Alta de Nuevo Producto</h1></span>
    <br>
    <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

        <label>Nombre Producto: </label>
        <input type="text" id="nombre_producto" name="nombre_producto" ><br>

        <label>Precio Producto: </label>
        <input type="text" id="precio_producto" name="precio_producto" ><br>

        <label>Stock Producto: </label>
        <input type="text" id="stock" name="stock" ><br>
        
        <label>Id Categoria </label>
        <input type="text" id="id_categoria" name="id_categoria"><br>
        
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection