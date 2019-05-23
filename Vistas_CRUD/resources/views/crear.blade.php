<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear - Producto</title>
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
        <div>
            <div>
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                    <span> <h1>View - Crear Producto</h1> </span>
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
                    <button>Crear</button>
                </div>
            </div>
        </div>
    </body>
</html>