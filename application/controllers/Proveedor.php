<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller
{
    public function ListadoProveedores()
    {
        //...
        $this->load->model('Proveedor_model', 'proveedor');
        $listado_proveedores = $this->proveedor->ListarProveedores();

        $this->layout->view('ListadoProveedores', compact('listado_proveedores'));
    }

    public function AgregarProveedor()
    {
        //...
        if($this->input->post() == true)
        {
            //...
            $this->load->model('Proveedor_model', 'nuevo_proveedor');
            $this->nuevo_proveedor->NuevoProveedor($_POST['nombre'], $_POST['apellido'], $_POST['nombre_de_la_empresa'], $_POST['cedula']);
            $url = base_url().'Proveedor/ListadoProveedores';
            header("Location:$url");
        }
        $this->layout->view('AgregarProveedor');
    }

    public function EditarProveedor(int $id_proveedor)
    {
        //...
        $this->load->model('Proveedor_model', 'proveedor');
        $proveedor_a_editar = $this->proveedor->FiltrarProveedor($id_proveedor);
        $this->layout->view('EditarProveedor', compact('proveedor_a_editar'));

    }

    public function AplicarCambiosAlProveedor()
    {
        //...
        if ($this->input->post())
        {
            $this->load->model('Proveedor_model', 'proveedor');
            $this->proveedor->EditarProveedor((int)$_POST['id_proveedor'],$_POST['nombre'],$_POST['apellido'],$_POST['nombre_de_la_empresa'],$_POST['cedula']);
            $url = base_url().'Proveedor/ListadoProveedores';
            header("Location:$url");
        }
    }

    public function EliminarProveedor(int $id_proveedor)
    {
        //...
        $this->load->model('Proveedor_model','proveedor');
        $proveedor_a_eliminar = $this->proveedor->FiltrarProveedor($id_proveedor);
        if ($proveedor_a_eliminar != null)
        {
            //...
            $this->proveedor->EliminarProveedor($id_proveedor);
        }
        $url = base_url().'Proveedor/ListadoProveedores';
        header("Location:$url");
    }
}
?>