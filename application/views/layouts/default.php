<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de inventario</title>
    <link rel="stylesheet" href="<?php echo base_url().'gestor/node_modules/bootstrap/dist/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'gestor/node_modules/bootstrap/scss/_root.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'gestor/node_modules/datatables/media/css/jquery.dataTables.min.css'; ?>">
</head>
<body>
    <!-- Aquí llamare las ventanas -->
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url().'Producto/ListaDeProductos'; ?>">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'Proveedor/ListadoProveedores'; ?>">Proveedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'ComprasDeProductos/ListadoDeCompras'; ?>">Comprar producto</a>
              </li>
            </ul>
        </div>

        <!-- Llamando las ventanas que utilizan el Layout. -->
        <?php
            echo $content_for_layout;
        ?>
    </div>

<script src="<?php echo base_url().'gestor/node_modules/jquery/dist/jquery.min.js';?>"></script>
<script src="<?php echo base_url().'gestor/node_modules/bootstrap/js/src/popover.js';?>"></script>
<script src="<?php echo base_url().'gestor/node_modules/bootstrap/dist/js/bootstrap.min.js';?>"></script>
<script src="<?php echo base_url().'gestor/node_modules/datatables/media/js/jquery.dataTables.js'; ?>"></script>
<script src="<?php echo base_url().'gestor/node_modules/sweetalert/dist/sweetalert.min.js'; ?>"></script>

<script src="<?php echo base_url().'wwwroot/js/producto/crudProducto.js'; ?>"></script>
<script src="<?php echo base_url().'wwwroot/js/comprarProducto/crudCompraProducto.js'; ?>"></script>
<script src="<?php echo base_url().'wwwroot/js/producto/alertaModificacion.js'; ?>"></script>
</body>
</html>