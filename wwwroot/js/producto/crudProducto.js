
$(document).ready(function(){
    listar();
    $('#nuevoProducto').hide();
});

var listar = function(){
    var urlActual = window.location;
    var tabla = $('#tablaProducto').DataTable({
        "destroy" : true
    });

    //...Aquí llamo el método obtener_data_para_editar
    //...Aquí llamo el método obtener_data_para_eliminar
}

var nuevoProducto = $('#mostrarFormulario').click(function(){
});

function eliminarProducto(id_producto){
    let id_productoJSON = { 'id_producto': id_producto };
    localStorage.setItem("id_producto", id_producto);
    console.log(localStorage.getItem('id_producto'));
}

var confirmandoDeseaEliminar = $('#confirmandoDeseaEliminar').click(function(){

    // Esta es la ventana modal y el botón confirmar sera el que elimine oficialmente el producto.
    // OJO el producto solo podrá ser eliminado cuando el usuario aún no efectue una venta u compra,
    // de dicho producto. Esto para mantener las llaves foraneas y que el mismo no haga un desmadre.
    // Eliminando los datos

    let id_producto = localStorage.getItem('id_producto');

    $.ajax({
        'type': 'post',
        'url': '/SistemaDeFacturacion_E_Inventario/Producto/EliminarProducto/'+id_producto,
        'datosDeLosProductos': { 'id_producto': id_producto }
    }).done( function(info){
        let jsonRespuesta = JSON.parse(info);
        console.log(jsonRespuesta.Eliminado.respuesta);
        $('#modalMensajeEliminar').modal('hide');

        setTimeout( function(){
            swal({
                title: "Datos eliminados",
                text: "Fue eliminado con exito este producto",
                icon: "success",
                button: "ok"
            });

            $('#tablaProducto').DataTable().ajax.reload();
        }, 300);
    });
});

var mostrarFormulario = $('#mostrarFormulario').click( function(){
    $('#nuevoProducto').show();
});