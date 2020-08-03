#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario

use DbSistemaDeFacturacion_E_Inventario;

create table Proveedor
(
id_proveedor int auto_increment,
nombre varchar(50) not null,
apellido varchar(50) not null,
nombre_de_la_empresa varchar(50) not null,
cedula varchar(11) not null,
primary key(id_proveedor)
);
select * from Proveedor;

insert into Proveedor values(null, 'Juan', 'Martinez', 'J.M SA', '001xxxxxxx1');
insert into Proveedor values(null, 'Juana', 'Sanchez', 'J.S. SA', '002xxxxxxx2');
insert into Proveedor values(null, 'Josefa', 'Vasquez', 'Doña Josefa', '003xxxxxxx4');
insert into Proveedor values(null, 'Antonia', 'Jimenez', 'Postres grupo Jimenez', '005xxxxxxx5');
insert into Proveedor values(null, 'Fred Michaell', 'Figueroa', 'Los frutos de Fred', '006xxxxxxx6');