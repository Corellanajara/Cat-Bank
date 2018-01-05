CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Cliente`(in plata int,in dni_cliente varchar(12),in nombre_cliente varchar(40),in apellido_cliente varchar(40),in direccion_cliente varchar(40),in fono_cliente varchar(40),in correo_cliente varchar(40),in pw_cliente varchar(40),in idtarjeta varchar(12))
BEGIN
Insert into Cliente (Rut,Nombre,Apellido,Direccion,Fono,Correo,pw) values (dni_cliente,nombre_cliente,apellido_cliente,direccion_cliente,fono_cliente,correo_cliente,pw_cliente);

insert into Tarjeta (Id) values (idtarjeta);

insert into Cuenta(Saldo,Cliente_Rut,Tarjeta_id) values( plata, dni_cliente, idtarjeta);

END