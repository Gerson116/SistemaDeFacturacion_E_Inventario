<!-- Titulo de la página y boton para mostrar el formulario. -->
<div class="row mt-3">
    <div class="col-md-4">
        <h1>
            Listado productos.
            <button class="btn btn-primary p-3" type="button">Nuevo producto</button>
        </h1>
    </div>
</div>

<hr>

<!-- Esta fila contiene el formulario para agregar nuevos productos. -->
<div class="row formularioAgregarProducto">
    <div class="col-md-4">
        <form action="<?php echo base_url();?>Producto/NuevoProducto" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del articulo</label>
                <input type="text" name="nombre" class="form-control" id="">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block p-3" type="submit" title="Se agregara un nuevo producto al sistema.">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- Esta fila contiene el listado de productos. -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover text-center">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($listadoProducto != null)
                {
                    foreach($listadoProducto as $producto)
                    {
                        echo '<tr>'
                        .'<td>'.$producto->id_producto.'</td>'
                        .'<td>'.$producto->nombre.'</td>'
                        .'<td>'
                            . " <a href='../Producto/EditarProducto/$producto->id_producto' class='btn btn-info'>Editar</a> "
                            . " <a href='../Producto/EliminarProducto/$producto->id_producto' class='btn btn-danger'> Eliminar </a> "
                        .'</td>'
                        .'</tr>';
                    }
                }
            ?>
        </tbody>
        </table>
    </div>
</div>