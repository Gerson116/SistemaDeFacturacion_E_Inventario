<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function ListaDeProductos()
	{
		//....
		$this->load->view('Producto/ListaDeProductos');
	}

	public function NuevoProducto()
	{
		$this->load->view('Producto/NuevoProducto');
	}

	public function EditarProducto()
	{
		$this->load->view('Producto/EditarProducto');
	}

	public function EliminarProducto()
	{
		// Esta acción va a redireccionar a los usuarios a la ventana Listado productos.
	}
}