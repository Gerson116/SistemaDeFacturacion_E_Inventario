<?php
    include 'ModalEliminarCompra.php';
?>

<div class="row mt-3">
    <div class="col">
        <a href="<?php base_url();?>../ComprasDeProductos/RealizarCompra" class="btn btn-primary p-3">Realizar compra</a>
    </div>
</div>

<hr>

<div class="row mt-3">
    <div class="col">
        <table class="table" id="tablaCompraDeProducto">
            <thead>
                <tr>
                    <th>Id Proveedor</th>
                    <th>Id producto</th>
                    <th>Cantidad exacta</th>
                    <th>Cantidad en lb</th>
                    <th>Monto por kilo o unidad</th>
                    <th>Monto total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($listado_de_compras != null)
                    {
                        foreach($listado_de_compras as $compras)
                        {
                            echo '<tr>'
                            .'<td>'.$compras->id_proveedor_fk_compra_de_producto.'</td>'
                            .'<td>'.$compras->id_compra_de_producto.'</td>'
                            .'<td>'.$compras->cantidad_exacta.'</td>'
                            .'<td>'.$compras->cantidad_por_libra.'</td>'
                            .'<td>'.$compras->monto_por_unidad_o_kilo.'</td>'
                            .'<td>'.$compras->monto_total.'</td>'
                            .'<td>'
                                . "<button type='button' id='eliminarCompraDeProducto' onclick=eliminarCompraDeProducto($compras->id_compra_de_producto) class='btn btn-danger' data-toggle='modal' data-target='#modalMensajeEliminarCompra'> Eliminar </button> "
                            .'</td>'
                            .'</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>