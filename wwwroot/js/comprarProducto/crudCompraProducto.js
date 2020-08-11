
$(document).ready(function(){
    listarCompra();
});

var listarCompra = function(){
    var urlActual = window.location;
    var tabla = $('#tablaCompraDeProducto').DataTable({
        "destroy" : true
    });

    //...Aquí llamo el método obtener_data_para_editar
    //...Aquí llamo el método obtener_data_para_eliminar
}

function eliminarCompraDeProducto(id_compra_de_producto){
    let id_productoJSON = { 'id_producto': id_compra_de_producto };
    localStorage.setItem("id_compra_de_producto", id_compra_de_producto);
    console.log(localStorage.getItem('id_compra_de_producto'));
}

var confirmandoDeseaEliminarCompra = $('#confirmandoDeseaEliminarCompra').click(function(){

    // Esta es la ventana modal y el botón confirmar sera el que elimine oficialmente la compra del producto
    let id_compra_de_producto = localStorage.getItem('id_compra_de_producto');
    $.ajax({
        'type': 'post',
        'url': '/SistemaDeFacturacion_E_Inventario/ComprasDeProductos/EliminarCompra/'+id_compra_de_producto,
        'datosDeLosProductos': { 'id_compra_de_producto': id_compra_de_producto }
    }).done( function(info){
        let jsonRespuesta = JSON.parse(info);
        console.log(jsonRespuesta.Eliminado.respuesta);
        $('#modalMensajeEliminarCompra').modal('hide');

        swal({
            title: "Datos eliminados",
            text: "Fue eliminado con exito este producto",
            icon: "success",
            button: "ok"
        });

        setTimeout( function(){
            //....
            location.reload();
        }, 1500);
    });
});
