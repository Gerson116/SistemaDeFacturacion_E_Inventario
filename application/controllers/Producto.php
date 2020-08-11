<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Producto_model', 'producto');
	}

	public function index()
	{
		$this->ListaDeProductos();
	}

	public function ProductoJSON($id_producto)
	{
		// Filtrando el producto por el ID y devolviendo un JSON.
		$productoJSON['datosDeLosProductos'] = $this->producto->FiltrarPorID($id_producto);
		if($productoJSON != null)
		{
			//...
			echo json_encode($productoJSON);
			exit();
		}
		else
		{
			$productoJSON['datosDeLosProductos'] = array( 'MensajeError'=> 'No existen datos' );
			echo json_encode($productoJSON);
			exit();
		}
	}

	public function ListaDeProductos()
	{
		//....
		//$this->load->model('Producto_model', 'producto');
		$listadoProducto = $this->producto->ListadoProductos();
		$this->layout->view('ListaDeProductos', compact('listadoProducto'));
	}

	public function ListaDeProductosJSON()
	{
		$listadoProductoJSON['datos'] = $this->producto->ListadoProductos();
		echo json_encode($listadoProductoJSON);
		//header('Content-Type: application/json');
		//$this->load->view('Producto/ListaDeProductosJSON', compact('listadoProductoJSON'));
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
				redirect(ListaDeProductos);
				//header("Location: $url_a_redireccionar");
			}
		}
	}

	public function EliminarProducto(int $id_producto)
	{
		// Esta acción va a redireccionar a los usuarios a la ventana Listado productos.
		//$this->load->model('Producto_model', 'producto');
		$datosDeLosProductos = $this->producto->FiltrarPorID($id_producto);
		
		$datosEliminadosConExito['Eliminado'] = array(
			'respuesta'=>true
		);
		$datosNoEliminados['noEliminado'] = array(
			'respuesta'=>false
		);

		if ($datosDeLosProductos != null)
		{
			$this->producto->EliminarProducto($id_producto);
			echo json_encode($datosEliminadosConExito);
			exit();
		}
	}
}