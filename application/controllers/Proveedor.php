<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller
{
    public function ListadoProveedores()
    {
        //...
        $this->layout->view('ListadoProveedores');
    }

    public function NuevoProveedor()
    {
        //..
    }

    public function AgregarProveedor()
    {
        //...
        $this->layout->view('AgregarProveedor');
    }

    public function EditarProveedor()
    {
        //...
        $this->layout->view('EditarProveedor');
    }

    public function EliminarProveedor()
    {
        //...
    }
}
?>