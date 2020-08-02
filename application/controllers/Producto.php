<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function index()
	{
		$this->ListaDeProductos();
	}

	public function ListaDeProductos()
	{
		//....
		$this->layout->view('ListaDeProductos');
	}

	public function NuevoProducto()
	{
		// Nota: Esta acción unicamente guarda los nombre de los productos.
		$this->load->view('Producto/NuevoProducto');
	}

	public function EditarProducto()
	{
		$this->layout->view('EditarProducto');
	}

	public function EliminarProducto()
	{
		// Esta acción va a redireccionar a los usuarios a la ventana Listado productos.
	}
}