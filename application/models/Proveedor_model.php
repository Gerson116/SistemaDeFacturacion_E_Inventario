<?php
class Proveedor_model extends CI_Model
{
    public function ListarProveedores()
    {
        # code...
        $query = $this->db->query("select * from Proveedor");
        if ($query->num_rows < 0)
        {
            return null;
        }
        return $query->result();
    }

    public function FiltrarProveedor(int $id_proveedor)
    {
        //...
        $query = $this->db->query("select * from Proveedor where id_proveedor = $id_proveedor");
        if ($query->num_rows < 0)
        {
            return null;
        }
        return $query->result();
    }
    
    public function NuevoProveedor(string $nombre, string $apellido, string $nombre_de_la_empresa, string $cedula)
    {
        # code...
        $nuevoProveedor=array(
            'id_proveedor' => null,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'nombre_de_la_empresa' => $nombre_de_la_empresa,
            'cedula' => $cedula
        );
        $this->db->insert("Proveedor",$nuevoProveedor);
    }

    public function EditarProveedor(int $id_proveedor, string $nombre, string $apellido, string $nombre_de_la_empresa, string $cedula)
    {
        # code...
        $datos_a_modificar = array(
            'id_proveedor' => $id_proveedor,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'nombre_de_la_empresa' => $nombre_de_la_empresa,
            'cedula' => $nombre_de_la_empresa
        );
        $this->db->where("id_proveedor = $id_proveedor");
        $this->db->update("Proveedor", $datos_a_modificar);
    }

    public function EliminarProveedor(int $id_proveedor)
    {
        //....
        $this->db->query("delete from Proveedor where id_proveedor = $id_proveedor");
    }
}
?>