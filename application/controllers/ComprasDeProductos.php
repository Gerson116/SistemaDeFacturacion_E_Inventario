<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComprasDeProductos extends CI_Controller
{
    //....
    public function ListadoDeCompras()
    {
        //...
        $this->load->model('ComprarProducto_model','compras');
        $listado_de_compras = $this->compras->ListarCompra();
        $this->layout->view('ListadoDeCompras', compact('listado_de_compras'));
    }

    public function RealizarCompra()
    {
        //...
        if ($this->input->post())
        {
            //...
            $this->load->model('ComprarProducto_model','compras');

            $listado_de_compras = $this->compras->NuevaCompra(
               $_POST['id_producto_fk_compra_de_producto'], $_POST['id_producto_fk_compra_de_producto'], 
               $_POST['cantidad_exacta'], $_POST['cantidad_por_libra'], $_POST['monto_por_unidad_o_kilo']
            );
            $url= base_url()."ComprasDeProductos/ListadoDeCompras";
            header("Location: $url");
        }
        $this->layout->view('RealizarCompra');
    }

    public function EliminarCompra(int $id_compra)
    {
        //...
        $this->load->model('ComprarProducto_model','compras');
        $this->load->model('Proveedor_model','proveedor');
        $comprobar_existencia = $this->compras->FiltrarCompra($id_compra);
        if ($comprobar_existencia != null)
        {
            $this->compras->EliminarCompra($id_compra);
        }
        $url= base_url()."ComprasDeProductos/ListadoDeCompras";
        header("Location: $url");
    }
}
?>