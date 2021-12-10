<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>

<body>
    <!--Santiago Bocel-->
    <?php
    //Cuestionario #3
    print "<h2>Cuestionario #3</h2>";
    print "<p style=\"text-align: justify;\">1. ¿Qué es un ciclo WHILE? </br> Es un ciclo que se repite infinitamente mientras no se cambie la condicion inicial </br> 2.¿Qué sucede cuando creamos un ciclo WHILE que nunca tendrá fin? Explique su respuesta </br> El cilo sera infinito y se repetira hasta que se logre cambiar la condicion </br> 3. ¿Es posible usar operaciones matemáticas para definir una condición en un WHILE? Explique su respuesta.   </br>  Si es posible si para comparar operaciones </br> 4. ¿Qué pasa cuando una condición en un WHILE se vuelve falsa?   </br> No entra al ciclo </br> 5. ¿Cuál es la diferencia entre un FOR, WHILE y un DO-WHILE? </br> El while hace lo que se indica mientras la primera condicion es verdadera el for hace lo que se le indica tantas veces fue indicado al principio y el do while hace lo que se indica y luego observa si cumple la condicion para seguir haciendolo </br> 6. Según su opinión, cual ciclo considera más fácil de aplicar en un script de PHP, ¿WHILE o FOR? </br> Concidero mas facil un ciclo while porque muchas veces no sabemos cuantas veces se repetira un ciclo pero si sabemos que condicion queremos que ya no se repita.</p>";

    //Ejercicio 3
    print "<h2 align=\"center\">Ejercicio 3 </br> Parte 1</h2>";
    $Rand_ = rand(1, 1_000);
    print "<h2> El número es: $Rand_</h2>";
    for ($i=1; $i <= 7; $i++) {
        switch ($i) {
            case 1:
                $Billete_ = intval($Rand_ / 200);
                $Rand_ =  $Rand_ % 200;
                $Cantidad_ = 200;
                break;
            case 2:
                $Billete_ = intval($Rand_ / 100);
                $Rand_ =  $Rand_ % 100;
                $Cantidad_ = 100;
                break;
            case 3:
                $Billete_ = intval($Rand_ / 50);
                $Rand_ =  $Rand_ % 50;
                $Cantidad_ = 50;
                break;
            case 4:
                $Billete_ = intval($Rand_ / 20);
                $Rand_ =  $Rand_ % 20;
                $Cantidad_ = 20;
                break;
            case 5:
                $Billete_ = intval($Rand_ / 10);
                $Rand_ =  $Rand_ % 10;
                $Cantidad_ = 10;
                break;
            case 6:
                $Billete_ = intval($Rand_ / 5);
                $Rand_ =  $Rand_ % 5;
                $Cantidad_ = 5;
                break;
            case 7:
                $Billete_ = intval($Rand_ / 1);
                $Rand_ =  $Rand_ % 1;
                $Cantidad_ = 1;
                break;
        }
        print "$i. Billetes de $Cantidad_ = $Billete_ </br>";
    }

    print "<h2  align=\"center\">Ejercicio 3 </br> Parte 2</h2>";
    $Calc_div = rand(1, 20);
    $Color_decimal = rand(1, 16_777_215);
    $Color_decimal_Aux = $Color_decimal;
    $hexadecimal = "";
    $cociente = 0;
    $residuo = 0;
    print "<h3>Cantidad de DIV $Calc_div</h3>";
    for ($i = 1; $i <= $Calc_div; $i++) {
        while($Color_decimal > 0){
            $cociente = floor($Color_decimal / 16);
            $residuo = $Color_decimal % 16;
            switch($residuo){
                case 0:
                    $hexadecimal = $hexadecimal."0";
                    break;
                case 1:
                    $hexadecimal = $hexadecimal."1";
                    break;
                case 2:
                    $hexadecimal = $hexadecimal."2";
                    break;
                case 3:
                    $hexadecimal = $hexadecimal."3";
                    break;
                case 4:
                    $hexadecimal = $hexadecimal."4";
                    break;
                case 5:
                    $hexadecimal = $hexadecimal."5";
                    break;
                case 6:
                    $hexadecimal = $hexadecimal."6";
                    break;
                case 7:
                    $hexadecimal = $hexadecimal."7";
                    break;
                case 8:
                    $hexadecimal = $hexadecimal."8";
                    break;
                case 9:
                    $hexadecimal = $hexadecimal."9";
                    break;
                case 10:
                    $hexadecimal = $hexadecimal."A";
                    break;
                case 11:
                    $hexadecimal = $hexadecimal."B";
                    break;
                case 12:
                    $hexadecimal = $hexadecimal."C";
                    break;
                case 13:
                    $hexadecimal = $hexadecimal."D";
                    break;
                case 14:
                    $hexadecimal = $hexadecimal."E";
                    break;
                case 15:
                    $hexadecimal = $hexadecimal."F";
                    break;
            }
            $Color_decimal = $cociente;
        }
        $Num_hexa = strrev($hexadecimal);

        print "<div style = \"background-color:#$Num_hexa\"; align=\"center\"> DIV.$i con un color de fondo es: $Num_hexa </div>";
        $hexadecimal = "";
        $Color_decimal_Aux = $Color_decimal_Aux + 100;
        $Color_decimal = $Color_decimal_Aux ;
    }


    ?>
</body>

</html>