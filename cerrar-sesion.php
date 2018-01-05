<?php
 include_once("comprobar.php");
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("HTTP/1.1 302 Moved Temporarily");
  header("Location: login.php");
?>