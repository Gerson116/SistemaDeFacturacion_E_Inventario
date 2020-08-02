<div class="row mt-3">
    <div class="col">
        <a href="<?php base_url();?>../Proveedor/AgregarProveedor" class="btn btn-primary p-3">Agregar nuevo proveedor</a>
    </div>
</div>

<hr>

<div class="row mt-3">
    <?php
        if($listado_proveedores != null)
        {
            foreach($listado_proveedores as $datosDelProveedor)
            {
                echo "<div class='col-md-3 mt-2'>"
                ."<div class='card' style='width: 18rem;'>"
                    .'<div class="card-body">'
                        .'<h5 class="card-title">'.$datosDelProveedor->nombre.' '.$datosDelProveedor->apellido.'</h5>'
                        .'<p>'.'Empresa:'.$datosDelProveedor->nombre_de_la_empresa.'</p>'
                        .'<p>'.'Cedula:'.$datosDelProveedor->cedula.'</p>'
                        ."<a href='../Proveedor/EditarProveedor/$datosDelProveedor->id_proveedor' class='card-link btn btn-info'>".'Editar'.'</a>'
                        ."<a href='../Proveedor/EliminarProveedor/$datosDelProveedor->id_proveedor' class='card-link btn btn-danger'>".'Eliminar'.'</a>'
                    .'</div>'
                ."</div>"."</div>";
            }
        }
    ?>
</div>