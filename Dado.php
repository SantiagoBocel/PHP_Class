<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado</title>
</head>
<body>
    <?php
        print "<h2>Lanzamiento de un dado</h2>\n";
        $dado = rand(1,7);
        print "<p>El numero es: $dado </p>";

        if($dado > 0 && $dado < 7){
            print "<P>El resultado esw mayor a 0 y menor a 7</p>\n";
        }


    ?>
</body>
</html>