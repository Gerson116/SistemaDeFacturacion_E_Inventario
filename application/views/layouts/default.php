<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de inventario</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>gestor/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Aquí llamare las ventanas -->
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Proveedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comprar producto</a>
              </li>
            </ul>
        </div>

        <!-- Llamando las ventanas que utilizan el Layout. -->
        <?php
            echo $content_for_layout;
        ?>
    </div>
</body>
<script src="<?php echo base_url();?>gestor/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>gestor/node_modules/bootstrap/js/popover.js"></script>
<script src="<?php echo base_url();?>gestor/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>