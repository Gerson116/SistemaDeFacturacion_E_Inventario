<div class="row mt-3">
    <div class="col">
        <a href="<?php base_url();?>../ComprasDeProductos/RealizarCompra" class="btn btn-primary p-3">Realizar compra</a>
    </div>
</div>

<hr>

<div class="row mt-3">
    <?php
        if($listado_de_compras != null)
        {
            foreach($listado_de_compras as $compras)
            {
                echo "<div class='col-md-3 mt-2'>"
                ."<div class='card' style='width: 18rem;'>"
                    .'<div class="card-body">'
                        .'<h5 class="card-title"> Fecha:'.$compras->fecha_de_compra.'Id_Cliente: '.$compras->id_proveedor_fk_compra_de_producto.'</h5>'
                        .'<p>'.'Cantidad exacta de compra: '.$compras->cantidad_exacta.'</p>'
                        .'<p>'.'Cantidad por lb de compra:'.$compras->cantidad_por_libra.'</p>'
                        .'<p>'.'Monto total:'.$compras->monto_total.'</p>'
                        ."<a href='../ComprasDeProductos/EliminarCompra/$compras->id_compra_de_producto' class='card-link btn btn-danger'>".'Eliminar'.'</a>'
                    .'</div>'
                ."</div>"."</div>";
            }
        }
    ?>
</div>