
<?php
  session_start();
 include("database.php");
  // Obtengo los datos cargados en el formulario de login.
 error_reporting(0);
  if($_POST['rut']!=NULL){
    $rut = $_POST['rut'];

    $password = $_POST['password'];

    // Esto se puede remplazar por un usuario real guardado en la base de datos.
    $check = $database->prepare(" SELECT * FROM Cliente WHERE Rut = '".$rut."' " );
    $check->execute();
    $resultado = $check->fetchall();
    $flag = 0;
  foreach ($resultado as $key => $value) {
    # code...
    $flag= 1;
    if($rut == $value[0] && $password == $value[6]){

     $saldo = $database->prepare(" SELECT * FROM Cuenta WHERE Cliente_Rut = '".$rut."'  " );
     $saldo->execute();
     $r = $saldo->fetchall();
   foreach ($r as $key => $valor) {
      $_SESSION['NCUENTA'] = $valor[0];
      $_SESSION['BALANCE'] = $valor[1];
      $_SESSION['IDCARD'] = $valor[3];
       # code...
     }

    // Guardo en la sesión el email del usuario.
    $_SESSION['NAME']=$value[1];
    $_SESSION['LNAME']=$value[2];
    $_SESSION['ADDRESS'] = $value[3];
    $_SESSION['PHONE']= $value[4];
    $_SESSION['MAIL']= $value[5];
    $_SESSION['PW']=$value[6];
    $_SESSION['ID'] = $rut;
    //include("pagina.php");
    // Redirecciono al usuario a la página principal del sitio.
    //header("HTTP/1.1 302 Moved Temporarily");
    header("Location: /CatBank/CatBank/menuajax.php");

   }else{
     echo "
     <div class='alert alert-danger alert-dismissable'>

         <strong>El email o password es incorrecto, vuelva a intenarlo</strong>
       </div>
       ";

       include("login.php");

  }

  }

  if($flag == 0  ){
    echo "
    <div class='alert alert-danger alert-dismissable'>

        <strong>El email o password es incorrecto, vuelva a intenarlo</strong>
      </div>
      ";

      include("login.php");
  }
   }

?>
