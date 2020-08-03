#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario

use DbSistemaDeFacturacion_E_Inventario;

create table CompraDeProductos
(
id_compra_de_producto int auto_increment,
id_producto_fk_compra_de_producto int,
id_proveedor_fk_compra_de_producto int,
cantidad_exacta int,
cantidad_por_libra float,
fecha_de_compra date,
monto_por_unidad_o_kilo float,
monto_total float,
primary key(id_compra_de_producto),
foreign key(id_producto_fk_compra_de_producto) references Producto(id_producto),
foreign key(id_proveedor_fk_compra_de_producto) references Proveedor(id_proveedor)
);