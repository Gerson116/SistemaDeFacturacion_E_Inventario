<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComprasDeProductos extends CI_Controller
{
    //....

    function __construct()
    {
        parent:: __construct();
        $this->load->model('ComprarProducto_model','compras');
    }

    public function ListadoDeCompras()
    {
        //...
        $listado_de_compras = $this->compras->ListarCompra();
        $this->layout->view('ListadoDeCompras', compact('listado_de_compras'));
    }

    public function RealizarCompra()
    {
        //...
        if ($this->input->post())
        {
            //...
            $listado_de_compras = $this->compras->NuevaCompra(
               $_POST['id_producto_fk_compra_de_producto'], $_POST['id_proveedor_fk_compra_de_producto'], 
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
        $this->load->model('Proveedor_model','proveedor');
        $comprobar_existencia = $this->compras->FiltrarCompra($id_compra);

		$datosEliminadosConExito['Eliminado'] = array(
			'respuesta'=>true
		);
		$datosNoEliminados['noEliminado'] = array(
			'respuesta'=>false
        );
        
        if ($comprobar_existencia != null)
        {
            $this->compras->EliminarCompra($id_compra);
            echo json_encode($datosEliminadosConExito);
            exit();
        }
        else
        {
            echo json_encode($datosNoEliminados);
            exit();
        }
        // $url= base_url()."ComprasDeProductos/ListadoDeCompras";
        // header("Location: $url");
    }
}
?>