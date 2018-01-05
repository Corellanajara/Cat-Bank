La base de datos está con unos pocos usuarios, pero en el momento de comenzar de cero ( hacer forward engineer) lo único que hay que hacer es abrir
stored procedures, darle a create y abrir los 3 que ya existen (Actualizar,Agregar_Cliente,Transferir) para que las querys cruciales sean ejecutadas todas a la vez.
teniendo listo esto hay que tener en cuenta que en el login dejé un boton que tiene acceso a una pagina para crear Clientes ( por comodidad), ese boton debe ser removido

CatBank está hecho en php mezclando un poco de javascript y un par de menús hechos en ajax, la tarjeta de coordenadas no era compatible para ser abierta dentro 
de el entorno, asi que la abro en una pestaña. está operativo el sistema de verificacion de digitos para hacer transferencias.

la pagina principal es login.php, a partir de esta se da acceso al menu si se autentica correctamente, desde el menu se puede acceder a todo CatBank, para cambiar
los datos del cliente es necesario saber la clave ya que sin esta no se realiza el cambio.
