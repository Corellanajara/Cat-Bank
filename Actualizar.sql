CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar`(in fname varchar(45), in apellido varchar(45), in addres varchar(45), in phone varchar(45), in mail varchar(45), in clave varchar(45) , in id varchar(12) )
BEGIN
UPDATE `catbank`.`Cliente` SET `Rut`=id, `Nombre`=fname, `Apellido`=lname, `Direccion`= address, `Fono`= phone , Correo=mail, pw=clave WHERE Rut=rut;

END