<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
                <div>
                    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                        <thead>
                            <th>Id Producto</th>
                            <th>Nombre Producto</th>
                            <th>Precio Producto</th>
                            <th>Stock</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>