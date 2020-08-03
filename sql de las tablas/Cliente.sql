#Esta es la base de datos utilizada DbSistemaDeFacturacion_E_Inventario

use DbSistemaDeFacturacion_E_Inventario;

create table Cliente
(
id_cliente int auto_increment,
nombre varchar(50),
apellido varchar(50),
cedula varchar(11),
fechaDeRegistro date,
fechaDeNacimiento date,
telefono char,
primary key(id_cliente)
);