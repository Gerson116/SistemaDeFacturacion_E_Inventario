<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComprasDeProductos extends CI_Controller
{
    //....
    public function ListadoDeCompras()
    {
        //...
        $this->layout->view('ListadoDeCompras');
    }

    public function RealizarCompra()
    {
        //...
        $this->layout->view('RealizarCompra');
    }

    public function EliminarCompra()
    {
        //...
    }
}
?>