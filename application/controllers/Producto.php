<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function ListaDeProductos()
	{
		//....
	}

	public function NuevoProducto()
	{
		$this->load->view('Producto/NuevoProducto');
	}

	public function GuardarProducto()
	{
		$this->load->view('Producto/CrearProducto');
	}
}