<?php

    /* mysqli(servidor, usuario, contraseña, base de datos) */
    $servidor = "127.0.0.1"; //localhost
    $usuario = "SCbocel";
    $password = "admin";
    $bd ="car_wash";
    $mysql = new mysqli($servidor,$usuario,$password,$bd);

    $resultados = $mysql->query("select * from resumen");

    foreach($resultados as $r)
    {
        //print_r($r);
        echo $r["Tamaño_Carro"]."<br/>";
    }

?>