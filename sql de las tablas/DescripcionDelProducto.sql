#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario

use DbSistemaDeFacturacion_E_Inventario;

create table DescripcionDelProducto
(
id_descripcion_del_producto int auto_increment,
codigo_de_barra int,
id_producto_fk_descripcion_del_producto int,
cantidad_exacta int,
cantidad_en_libra float,
fecha_de_vencimiento date,
comentario_del_producto varchar(200),
primary key(id_descripcion_del_producto),
foreign key(id_producto_fk_descripcion_del_producto) references Producto(id_producto)
);