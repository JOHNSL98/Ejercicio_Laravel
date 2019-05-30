@extends('templates.product')
@section('title', 'Productos')

@section('content')
    <span><h1>View - Productos</h1></span>
    <br>
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
            <th>Id Producto</th>
            <th>Nombre Producto</th>
            <th>Precio Producto</th>
            <th>Stock</th>
        </thead>
    </table>
@endsection