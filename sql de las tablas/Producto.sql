#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario

use DbSistemaDeFacturacion_E_Inventario;

create table Producto
(
id_producto int auto_increment,
nombre varchar(50),
cantidad_exacta int,
cantidad_en_libra float,
precio float,
primary key(id_producto)
);
select * from Producto;

insert into Producto values(null, 'manzanas', 0, null, 0);
insert into Producto values(null, 'piña', 0, null, 0);
insert into Producto values(null, 'pollo', 0, 0, 0);
insert into Producto values(null, 'pasta de tomate', 0, null, 0);
insert into Producto values(null, 'ketchup', 0, null, 0);