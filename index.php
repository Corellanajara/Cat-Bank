<?php
//incluir el archivo principal
include("Slim/Slim.php");
//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion
$app = new \Slim\Slim();
//routing
//accediendo VIA URL  //http:///www.google.com/  //localhost/apirest/index.php/ => "Hola mundo ...."
$app->get(
    '/',function() use ($app){
    	//consultas a la base de datos
    	// peticiones a otro rest
    	// etcetera
    	include("login.php");
    }
)->setParams(array($app));

$app->get(
    '/pagos/:nombre/:valor/',function($nombre,$valor) use ($app){
    	$id = $nombre;
      $cantidad = $valor;    	//almaceno el ID    	//conexion con base de datos    	//el proceso    	// retorno un JSON
      echo "<!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <title></title>
        </head>
        <body>
        <h1>pagar todo </h1>
        <h3> hola bienvenido, Pagaras en   $nombre debes :$ $cantidad. </h3>
        </body>
      </html> ";

    }
);
//inicializamos la aplicacion(API)
$app->run();
  ?>
