<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de inventario</title>
    <link rel="stylesheet" href="<?php echo base_url();?>wwwroot/Bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>wwwroot/css/fondoDePantalla.css">
</head>
<body>
    <!-- Aquí llamare las ventanas -->
    <div class="container-fluid">
        <div class="row p-1 filaMenu">
            <!-- Este es el menú -->
            <nav class="nav menu">
                <a class="nav-link active" href="<?php base_url();?>../Producto/ListaDeProductos">Inicio</a>
                <a class="nav-link" href="<?php base_url();?>../Proveedor/ListadoProveedores">Proveedores</a>
                <a class="nav-link" href="<?php base_url();?>../ComprasDeProductos/ListadoDeCompras">Comprar producto</a>
            </nav>
        </div>

        <!-- Llamando las ventanas que utilizan el Layout. -->
        <?php
            echo $content_for_layout;
        ?>
    </div>
</body>
<script src="<?php echo base_url();?>wwwroot/Bootstrap4/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url();?>wwwroot/Bootstrap4/js/popper.min.js"></script>
<script src="<?php echo base_url();?>wwwroot/Bootstrap4/js/bootstrap.min.js"></script>
</html>