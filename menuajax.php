<html>
<title>CatBank</title>
<link rel="shortcut icon" type="image/png" href="../assets/cat_icon.png"/>

<head>
<?php
session_start();
include("style.css");
?>
<script type="text/javascript">

function getPages(divid,url)
{

 if(divid !="" && url != "")
 {
	var ob= AjaxObject();
	var unixTimeStamp= fetch_unix_timestamp();
	var nocacheurl = url+ "?t=" + unixTimeStamp;

	ob.onreadystatechange=function()
	{
      if(ob.readyState==4)
       {
		   if(ob.status == 200)
		   {
			   if(ob.responseText != null)
			   {
				   document.getElementById(divid).innerHTML=ob.responseText;
			   }else
			     {
					 alert('There was an error: no data was received');
				 }
		   }else
		     {
			   alert('Ajax error:' + ob.statusText);
		     }
		}
    }
    ob.open("GET",nocacheurl,true);
    ob.send(null);
	}else{

	alert('ups, you should forgotten put the DIV id or the URL on href, just do the things right, ok? ')	;
    alert('Se te a olvidado colocar el id del DIV o el URL en el href  del achor tag, en el evento de onClick ');
	}
}

function fetch_unix_timestamp()
{
    return parseInt(new Date().getTime().toString().substring(0, 10))
}


function AjaxObject()
{
var xmlHttp;
  try{
   return xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
    }
     catch (e){
     try{
      return xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
       }
       catch (e){
       try{
        return xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
       catch (e){
     alert("Sorry AJAX is not supported by your browser.");
    return false;
  }
 }
}
}
</script>


</head>

<nav id = "menu">
		<ul class="nav nav-pills">
			<li ><a  href="Saldo.php" onClick="getPages('response',this); return false">Saldo</a></li>
			<li><a href="cartola.php" onClick="getPages('response',this); return false">Cartola</a></li>
			<li><a href="Transferencia.php" onClick="getPages('response',this); return false">Transferencias</a></li>
			<li><a href="cerrar-sesion.php" >Salir Al Carajo</a></li>
			<li style="float:right;"><a class="glyphicon glyphicon-user" href="user.php"  onClick="getPages('response',this); return false"><?php echo " ".$_SESSION['NAME']." ".$_SESSION['LNAME']; ?></a></li>

		</ul>
	</nav>

<div id="response"></div>
</body>
</html>
