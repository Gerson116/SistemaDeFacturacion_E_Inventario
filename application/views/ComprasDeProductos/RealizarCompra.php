<div class="row mt-3 justify-content-center">
    <div class="col-md-8">
        <form action="<?php echo base_url();?>ComprasDeProductos/RealizarCompra" method="post">
            <div class="form-group">
                <label for="id_producto_fk_compra_de_producto">Código del producto.</label>
                <input type="number" name="id_producto_fk_compra_de_producto" class="form-control" placeholder="Ingrese aquí el Código del producto: 00000">
            </div>
            <div class="form-group">
                <label for="id_producto_fk_compra_de_producto">Código del proveedor.</label>
                <input type="number" name="id_producto_fk_compra_de_producto" class="form-control" placeholder="Ingrese aquí el Código del proveedor: 00000">
            </div>
            <div class="form-group">
                <label for="cantidad_exacta">Cantidad exacta del producto</label>
                <input type="number" name="cantidad_exacta" id="" placeholder="Ingrese la cantidad a comprar" class="form-control">
            </div>
            <div class="form-group">
                <label for="cantidad_por_libra">Cantidad en libras del producto</label>
                <input type="number" name="cantidad_por_libra" id="" placeholder="Ingrese la cantidad a comprar" class="form-control">
            </div>
            <div class="form-group">
                <label for="monto_por_unidad_o_kilo">Monto por unidad</label>
                <input type="number" name="monto_por_unidad_o_kilo" id="" placeholder="Monto total" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success p-3">Guardar compra.</button>
            </div>
        </form>
    </div>
</div>