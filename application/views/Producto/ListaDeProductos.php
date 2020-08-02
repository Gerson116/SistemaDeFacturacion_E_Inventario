<!-- Titulo de la página y boton para mostrar el formulario. -->
<div class="row mt-3">
    <div class="col-md-4">
        <h1>
            Listado productos.
            <button class="btn btn-primary p-3" type="button">Agregar nuevo producto</button>
        </h1>
    </div>
</div>

<hr>

<!-- Esta fila contiene el formulario para agregar nuevos productos. -->
<div class="row formularioAgregarProducto">
    <div class="col-md-4">
        <form action="" method="post">
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
            <tr>
                <td>1250420</td>
                <td title="Este es el nombre del articulo">Pasta de tomate</td>
                <td>
                    <a href="#" class="btn btn-info" title="Productos que poseen este código">i</a>
                    <a href="<?php base_url();?>EditarProducto" class="btn btn-success" title="Editar el producto">e</a>
                    <a href="<?php base_url();?>EliminarProducto" class="btn btn-danger" title="Eliminar el producto">d</a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>