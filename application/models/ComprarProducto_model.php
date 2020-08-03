<?php
class ComprarProducto_model extends CI_Model
{
    public function ListarCompra()
    {
        //...
        $query = $this->db->query("select * from CompraDeProductos");
        if ($query->num_rows < 0)
        {
            return null;
        }
        return $query->result();
    }

    public function FiltrarCompra(int $id_compra_de_producto)
    {
        //...
        $compra_filtrada = $this->db->query("select * from CompraDeProductos where id_compra_de_producto = $id_compra_de_producto");
        if ($compra_filtrada->num_rows < 0)
        {
            return null;
        }
        return $compra_filtrada->result();
    }

    public function NuevaCompra(int $id_producto_fk_compra_de_producto, int $id_proveedor_fk_compra_de_producto, 
            int $cantidad_exacta, float $cantidad_por_libra, float $monto_por_unidad_o_kilo)
    {
        # code...
        $monto_total = 0;
        if($cantidad_exacta > 0)
        {
            $monto_total = $cantidad_exacta * $monto_por_unidad_o_kilo;
        }
        else{ $monto_total = $cantidad_por_libra * $monto_por_unidad_o_kilo; }
        $nueva_compra = array(
            'id_producto_fk_compra_de_producto' => $id_producto_fk_compra_de_producto,
            'id_proveedor_fk_compra_de_producto' => $id_proveedor_fk_compra_de_producto,
            'cantidad_exacta' => $cantidad_exacta,
            'cantidad_por_libra' => $cantidad_por_libra,
            'fecha_de_compra' => date("y.m.d"),
            'monto_por_unidad_o_kilo' => $monto_por_unidad_o_kilo,
            'monto_total' => $monto_total
        );
        
        $this->db->insert("CompraDeProductos", $nueva_compra);
    }

    public function EliminarCompra(int $id_compra_de_producto)
    {
        //...
        $this->db->query("delete from CompraDeProductos where id_compra_de_producto = $id_compra_de_producto");
    }
}
?>