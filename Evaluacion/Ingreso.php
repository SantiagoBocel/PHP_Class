<?php
    session_start();
    $User= $_SESSION['User'];
    if(isset($User))
    {
        echo "<h1align='Left' style='font-size: 50px; font-family: Arial, Helvetica, sans-serif;'>El usuario es: $User</h1><br/><br/>";
    }
    else
    {
        header("Location: Login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Resumen</title>
</head>
<body style="background-color: #0CB2F7;">
<Small align="Left"> <b>20/05/2021</b> </Small>
    <h1 align="center" style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;">Resumen de lo aprendido</h1>
    <hr color="#006400" width="100%" size=9 />
    <P style="color:black; font-size: 20px; text-align: justify;">
    Durante el curso de PHP 2021 logramos aprender dedes lo basico de HTML. Desde que es HTML, cómo funciona HTML y lo que se necesita para utilizar, conforme fue avanzando el curso descubrimos más herramientas utiles como los estilos de parafo como realizar indices y separar nuestras paginas.<br/><br/> Lo mas importante del curso empezo cuando vimos PHP al ver las variables y utilizar echo para mostrar algo en la pagina los ejercicios en los que se utilizo if, while y for fueron interesantes y enseñaron muchas cosas.
    <br/><br/> llegando al final del curso los temas funciones, utilizar POST, GET, COOKIES y sesiones se volvieron los mas importantes y utiles para completar el curso. 
    </P>
    <h1 align="center" style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;">Experiencia</h1>
    <hr color="#006400" width="100%" size=9 />
    <P style="color:black; font-size: 20px; text-align: justify;">
     Yo tenia mucho entusiasmo por el curso ya que me intereso html y css desde el año pasado y php era mi plan, recuerdo que lo mas complicado fue utilizar los ciclos while en un ejercicio el cual el profesor no termino ayudando y me despejo muchas dudas.<br/><br/>
     Otra experiencia personal fue que el curso me ayudo en la universidad porque en un curso tenia que escoger un lenguaje para realizar un servidor web simple me ayudo mucho lo aprendido porque escogi PHP para ese trabajo.
    </p>
    <h1 align="center" style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;">Comentario Final</h1>
    <hr color="#006400" width="100%" size=9 />
    <p style="color:black; font-size: 20px; text-align: justify;"> La dinamica fue excelente los trabajos eran justos y en el tiempo perfecto personalmente me gustaria haber llegado hasta combinarlo con bases de datos pero de lo general aprendí muy bien los temas.</p>


     <a align="center" style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;" href="Cerrar.php">Cerrar Sesión</a>
     
</body>
</html>