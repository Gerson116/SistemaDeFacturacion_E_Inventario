<div class="row justify-content-center">
    <div class="col-md-8 mt-4">
        <h1>Nuevo proveedor</h1>
    </div>
    <div class="col-md-8">
        <form action="AgregarProveedor" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required type="text" name="nombre" class="form-control" placeholder="Gerson">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input required type="text" name="apellido" class="form-control" placeholder="Santos Mateo">
            </div>
            <div class="form-group">
                <label for="nombre_de_la_empresa">Nombre de la Empresa</label>
                <input required type="text" name="nombre_de_la_empresa" class="form-control" placeholder="Mi empresa">
            </div>
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input required type="text" name="cedula" class="form-control" placeholder="402xxxxxxx0">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-success p-3">
                    Guardar proveedor
                </button>
            </div>
        </form>
    </div>
</div>