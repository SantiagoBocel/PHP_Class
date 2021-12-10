<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional</title>
</head>

<body>
    <!--Santiago Bocel-->
    <?php
    //Cuestionario #1
    print "<h2>Cuestionario #1</h2>";
    print "<p>1. ¿Qué es una estructura IF? </br> Es una toma de decición de hacia donde tomar segun una especificacion anterior </br> 2. ¿Cuántas condiciones puedo evaluar en un bloque IF? Explique su respuesta. </br> puede evaluar cuantas se desé siempre que sean separados por condiciones logicas </br> 3. ¿Qué es un bloque de instrucciones? </br>  Es una parte del codigo que indica que es lo que se debe hacer </br> 4. ¿La instrucción ELSE es Obligatoria? Explique su respuesta. </br> No necesariamente si solamente se tiene una opcion. </br> 5. ¿Una condición IF puede evaluar un resultado FALSE? Explique su respuesta </br> Si en este caso el resultado a ser falso no entra en el bloque de instrucción.  </p>";
    //Ejercicio #1
    print "<h2>Con dos números</h2>";
    $Rand_1 = rand(1, 100);
    $Rand_2 = rand(1, 100);
    print "<h2>El Primer número es: $Rand_1 </br> El segundo número es: $Rand_2</h2>";
    if (($Rand_1 % 2) == 0) {
        print "<p>$Rand_1 es par</p>";
    } else {
        print "<p>$Rand_1 es impar</p>";
    }
    if (($Rand_2 % 2) == 0) {
        print "<p>$Rand_2 es par</p>";
    } else {
        print "<p>$Rand_2 es impar</p>";
    }
    if ($Rand_1 > $Rand_2) {
        print "<p>El Primer es el mayor ($Rand_1)</p>";
    } else if ($Rand_1 < $Rand_2) {
        print "<p>El Segundo es el mayor ($Rand_2)</p>";
    } else {
        print "<p>ambos son iguales</p>";
    }
    //Tres números
    print "<h2>Con tres números</h2>";
    $Rand_1 = rand(1, 100);
    $Rand_2 = rand(1, 100);
    $Rand_3 = rand(1, 100);
    print "<h2>El Primer número es: $Rand_1 </br> El segundo número es: $Rand_2 </br> El tercer número es: $Rand_3 
    </h2> ";
    if (($Rand_1 % 2) == 0) {
        print "<p>$Rand_1 es par</p>";
    } else {
        print "<p>$Rand_1 es impar</p>";
    }
    if (($Rand_2 % 2) == 0) {
        print "<p>$Rand_2 es par</p>";
    } else {
        print "<p>$Rand_2 es impar</p>";
    }
    if (($Rand_3 % 2) == 0) {
        print "<p>$Rand_3 es par</p>";
    } else {
        print "<p>$Rand_3 es impar</p>";
    }
    if ($Rand_1 < $Rand_2 && $Rand_2 < $Rand_3) {
        print "El mayor es: $Rand_3 ";
    } else if ($Rand_1 < $Rand_2 && $Rand_2 > $Rand_3) {
        print "El mayor es: $Rand_2 ";
    } else if ($Rand_1 > $Rand_2 && $Rand_1 < $Rand_3) {
        print "El mayor es: $Rand_3 ";
    } else if ($Rand_1 > $Rand_2 && $Rand_1 > $Rand_3) {
        print "El mayor es: $Rand_1 ";
    }
    //Cuestionario # 2
    print "<h2>Cuestionario #2</h2>";
    print "<p>1. ¿Qué es una estructura SWITCH? </br> Dependiendo de un caso va a realizar una accion determinada </br> 2. ¿La condición DEFAULT es obligatoria?  </br> Si porque si el caso que se desa no existe como posibilidad es necesario mostrar algo. </br> 3. ¿Por qué es necesaria la instrucción BREAK?  </br> Para terminar el caso. </br> 4. ¿Cuántas veces puedo evaluar una variable? </br> Varias veces </br> 5. ¿Es posible usar una estructura SWITCH si no conozco la cantidad de casos a evaluar? </br> No porque no se sabe cuantos casos utilizar </p>";
    // Ejercicio 2
    print "<h1>Volcanes</h1>";
    $Volcan = rand(1,10);
    print "<h2>El numero de Volcan es: $Volcan</h2>";
    print "<ol><li>Volcán Acatenango </li><li>Volcán de Pacaya </li><li>Volcán de Agua </li>
    <li>Volcán de Fuego </li><li>Volcán Tacaná  </li></ol>";
    switch ($Volcan) {
        case 1:
            print "<h2>Volcán Acatenango</h2>";
            echo "<img  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Guatemala_Volcano_Fuego.jpg/275px-Guatemala_Volcano_Fuego.jpg \" />";
            print "<p>El Acatenango es un estratovolcan de Guatemala, en cercanías de la ciudad de Antigua en el municipio de Acatenango (Chimaltenango). El volcán tiene dos picos, el Pico Mayor y Yepocapa (3880 m s. n. m.), que también es conocido como «Tres Hermanas». Acatenango se encuentra unido al volcán de Fuego, y la unión de ambos, es conocida como «La Horqueta»; de hecho, el macizo de Fuego-Acatenango comprende una cadena montañosa de cinco o más volcanes de dirección norte-sur en forma perpendicular al arco centroamericano de Guatemala. Entre los principales se encuentran Antiguo Acatenango, Yepocapa, Pico Mayor de Acatenango, Meseta y Volcán de Fuego. El macizo Fuego-Acatenango era originalmente referido por los colonos españoles como «los volcanes de Fuego».</p>";
            break;
        case 2:
            print "<h2>Volcán de Pacaya</h2>";
            echo "<img  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Pacaya_erupting_in_1976.jpg/275px-Pacaya_erupting_in_1976.jpg \" />";
            print "<p>El Volcán de Pacaya es un volcán activo ubicado en el municipio de Amatitlán en el departamento de Guatemala y el municipio de San Vicente Pacaya en el departamento de Escuintla, Guatemala.</p>";
            break;
        case 3:
            print "<h2>Volcán de Agua</h2>";
            echo "<img  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/AntiguaG1.jpg/275px-AntiguaG1.jpg \" />";
            print "<p>El volcán de Agua, también conocido como Hunahpú por los mayas, es un volcán inactivo situado entre el municipio de Santa María de Jesús en el departamento de Sacatepéquez, el municipio de Escuintla y el municipio de Palin ambos en el departamento de Escuintla en Guatemala, a pocos kilómetros de la ciudad colonial de Antigua Guatemala.</p>";
            break;
        case 4:
            print "<h2>Volcán de Fuego</h2>";
            echo "<img  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Volcan_Fuego.jpg/275px-Volcan_Fuego.jpg \" />";
            print "<p>El volcán de Fuego es a lo que se le conoce como un estratovolcán activo situado entre los departamentos de Sacatepéquez, Escuintla y Chimaltenango, al centro-sur de Guatemala. El volcán de Fuego es el volcán más activo de Centroamérica y uno de los más activos del mundo.</p>";
            break;
        case 5:
            print "<h2>Volcán Tacaná</h2>";
            echo "<img  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Volcan_Tacana_01.jpg/275px-Volcan_Tacana_01.jpg \" />";
            print "<p>El Tacaná es un volcán de América Central, que se ubica en el límite entre Guatemala y México
            Es un estratovolcán activo, estromboliano, que se eleva hasta los 4092 metros sobre el nivel del mar. Se localiza entre el municipio de Sibinal del Departamento de San Marcos, Guatemala y del municipio de Unión Juárez y el municipio de Cacahoatán del estado mexicano de Chiapas. Es el octavo pico más alto de México y el segundo de Guatemala, es raro que se cubra de nieve, sus laderas presentan un bosque muy frondoso. Es el límite natural de México con Guatemala. El volcán está constituido por rocas de andesita de hiperstena y augita, y se eleva sobre un basamento de rocas volcánicas del Terciario y rocas ígneas de composición granítico-diorítica. En el flanco O-SO, se localiza una zona de fumarolas, con temperaturas variables entre los 82 y 94°C. Además, entre las elevaciones de 1500 y 2100 m s. n. m. se localizan manantiales termales con temperaturas que varían de 40 a 55°C, en el lugar conocido como Agua Caliente.</p>";
            break;
        default:
            print "<p>  La pagina aun no tiene la información </p>";
            break;
    }
    ?>
</body>

</html>