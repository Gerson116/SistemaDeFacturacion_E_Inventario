<?php
class Producto_model extends CI_Model
{
    // Este modelo trabaja la tabla producto.
    public function ListadoProductos() : array
    {
        //....
        $query = $this->db->query("select * from Producto");
        //...
        if ($query->num_rows < 0)
        {
            return null;
        }
        return $query->result();
    }

    public function NuevoProducto(string $nombre)
    {
        // Agregando nuevo producto al inventario.
        $nuevoProducto = array(
            nombre => $nombre
        );
        $query = $this->db->insert("Producto", $nuevoProducto);
    }

    public function FiltrarPorID(int $id_producto)
    {
        //...
        $query = $this->db->query("select * from Producto where id_producto = $id_producto");
        if ($query->num_rows < 0)
        {
            return null;
        }
        return $query->result();
    }

    public function EditarProducto(int $id_producto, string $nombre)
    {
        $cambios_a_realizar = array(
            'id_producto'=>$id_producto, 'nombre'=>$nombre, 'cantidad_exacta'=>null, 'cantidad_en_libra'=>null, 'precio'=>null
        );
        $this->db->where("id_producto = $id_producto");
        $this->db->update("Producto", $cambios_a_realizar);

        // Al retorno los datos que fueron cambiados.
        $this->db->query("select * from Producto where id_producto = $id_producto")->result();
    }

    public function EliminarProducto(int $id_producto)
    {
        //....
        $this->db->query("delete from Producto where id_producto = $id_producto");
    }
}
?>