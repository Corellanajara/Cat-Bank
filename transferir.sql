CREATE DEFINER=`root`@`localhost` PROCEDURE `Transferir`(in monto int, rut_destinatario varchar(12), in rut varchar(12),in fecha datetime, in cuenta_destino int ,in cuenta_actual int)
BEGIN
	
	INSERT INTO `catbank`.`Transferencia` (`Saldo`, `Numero`, `Rut`, `Cuenta_Ncuenta`, `Cliente_Rut`) VALUES (monto, numero, rut_destinatario, cuenta_actual, rut);
    INSERT INTO `catbank`.`Cartola` (`Fecha`, `Ndestinatario`, `Cuenta_Ncuenta`, `Abono`, `Cargo`) VALUES (fecha, cuenta_destino, cuenta_actual, monto, 0);
	INSERT INTO `catbank`.`Cartola` (`Fecha`, `Ndestinatario`, `Cuenta_Ncuenta`, `Abono`, `Cargo`) VALUES (fecha,  cuenta_actual,cuenta_destino, 0, monto);
	update Cuenta set Saldo = Saldo-monto where Ncuenta = cuenta_actual;
    update Cuenta set Saldo = Saldo+monto where Ncuenta = cuenta_destino;
END