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
		$this->load->model('Producto_model');
		$listadoProducto = $this->Producto_model->ListadoProductos();

		$this->layout->view('ListaDeProductos', compact('listadoProducto'));
	}

	public function NuevoProducto()
	{
		// Nota: Esta acción unicamente guarda los nombre de los productos.
		$this->load->model('Producto_model', 'producto');
		if($this->input->post())
		{
			$this->producto->NuevoProducto((string)$_POST['nombre']);
		}
		$url_a_redireccionar = base_url().'Producto/ListaDeProductos';

		header("Location:$url_a_redireccionar");
	}

	public function EditarProducto(int $id_producto)
	{
		$this->load->model('Producto_model', 'producto');

		$producto_a_editar = $this->producto->FiltrarPorID($id_producto);
		$this->layout->view('EditarProducto', compact('producto_a_editar'));

		if ($this->input->post())
		{
			// Actualizando los datos del producto.
			$datosDelProducto = $this->producto->EditarProducto((int)$_POST['id_producto'], (string)$_POST['nombre']);
			if ($datosDelProducto != null)
			{
				$url_a_redireccionar = base_url().'Producto';
				redirect('ListaDeProductos');
				//header("Location: $url_a_redireccionar");
			}
		}
	}

	public function EliminarProducto(int $id_producto)
	{
		// Esta acción va a redireccionar a los usuarios a la ventana Listado productos.
		$this->load->model('Producto_model', 'producto');
		$datosDelProducto = $this->producto->FiltrarPorID($id_producto);

		if ($datosDelProducto != null)
		{
			$this->producto->EliminarProducto($id_producto);
			$url_a_redireccionar = base_url().'Producto/ListaDeProductos';
			header("Location: $url_a_redireccionar");
		}
	}
}