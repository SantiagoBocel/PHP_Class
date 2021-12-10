<?php
 
 setcookie("nombre",$_POST['Nombre'], time() + 100);
 setcookie("apellido",$_POST['Apellido'], time() + 100);
 setcookie("numero",$_POST['Numero'], time() + 100);
 setcookie("direccion",$_POST['Dirección'], time() + 100);

 if(isset($_COOKIE["nombre"]) && isset($_COOKIE["apellido"]) && isset($_COOKIE["numero"]) && isset($_COOKIE["direccion"]))
 {
     print "<p>Nombre:  ". $_COOKIE["nombre"]."<br>"
     ."Apellido:  ". $_COOKIE["apellido"]."<br>"
     ."Número:  ". $_COOKIE["numero"]."<br>"
     ."Dirección:  ". $_COOKIE["direccion"]."<br>"."</p>\n";
 }
 else{
     print"<p>No se ha contestado el formulario</p>";
     header("Location: formulario.html");
     die();
 }
?>