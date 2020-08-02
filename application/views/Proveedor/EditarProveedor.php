<div class="row justify-content-center">
    <div class="col-md-8 mt-4">
        <h1>Editar proveedor</h1>
    </div>
    <div class="col-md-8">
        <form action="<?php echo base_url(); ?>Proveedor/AplicarCambiosAlProveedor" method="post">
            <div class="form-group">
                <!-- NOTA: Este input contendra el ID del proveedor. -->
                <!-- FAVOR NO TOCAR -->
                <input type="hidden" name="id_proveedor" value="<?php echo $proveedor_a_editar[0]->id_proveedor; ?>">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $proveedor_a_editar[0]->nombre; ?>" class="form-control" placeholder="Gerson">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $proveedor_a_editar[0]->apellido; ?>" class="form-control" placeholder="Santos Mateo">
            </div>
            <div class="form-group">
                <label for="nombre_de_la_empresa">Nombre de la Empresa</label>
                <input type="text" name="nombre_de_la_empresa" value="<?php echo $proveedor_a_editar[0]->nombre_de_la_empresa; ?>" class="form-control" placeholder="Mi empresa">
            </div>
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" value="<?php echo $proveedor_a_editar[0]->cedula; ?>" class="form-control" placeholder="402xxxxxxx0">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-success p-3">
                    Guardar proveedor
                </button>
            </div>
        </form>
    </div>
</div>