#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario
USE DbSistemaDeFacturacion_E_Inventario;

create table Empleado
(
id_empleado int auto_increment,
nombre varchar(50) not null,
apellido varchar(50) not null,
cedula varchar(11) not null,
telefono char,
direccion varchar(200),
rol_empleado int,
primary key(id_empleado),
foreign key(rol_empleado) references RolesDelPersonal(id_rol_empleado)
);