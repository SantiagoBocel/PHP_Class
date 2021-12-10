<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $Continentes = array(
            "<h1>América</h1><p style='color:black; font-size: 20px; text-align: justify;'> Está separada de Asia por el estrecho de Bering, limita al norte con el océano Glacial Ártico, al oeste con el océano Pacífico y al este con el Atlántico. Puede dividirse en dos o tres subcontinentes.</p>",
            "<h1>África</h1><p style='color:black; font-size: 20px; text-align: justify;'> unida a Asia por el istmo de Suez y separada de Europa por el estrecho de Gibraltar y se extiende hacia el sur hasta el cabo de Buena Esperanza; limita al norte con el Mediterráneo, al oeste, con el océano Atlántico y al este con el Índico.</p>",
            "<h1>Asia</h1><p style='color:black; font-size: 20px; text-align: justify;'>unida a África por el istmo de Suez, separada de Europa por los Urales y de América por el estrecho de Bering. Limita al norte con el océano Glacial Ártico, al oeste con el mar Negro y el Mediterráneo, al sur con el océano Índico y al este con el Pacífico.</p>",
            "<h1>Europa</h1><p style='color:black; font-size: 20px; text-align: justify;'>separada de África por el Mediterráneo, se extiende desde los Urales hacia el poniente hasta la península ibérica.</p>",
            "<h1>Ocenaia</h1><p style='color:black; font-size: 20px; text-align: justify;'>localizada al sureste de Asia, entre los océanos Índico y Pacífico. Los nombres de Australia o Australasia se utilizan a veces en lugar de Oceanía.</p>",
            "<h1>Antártida</h1><p style='color:black; font-size: 20px; text-align: justify;'>rodea al Polo Sur. Está separada de América por el pasaje de Drake, de Oceanía por el límite entre los océanos Pacífico e Índico, y de África por el límite entre este último y el Atlántico.</p>");
            $Index = rand(0,5);
            echo "Numero de continente: $Index";
            echo "$Continentes[$Index]";
    ?>   
</body>
</html>