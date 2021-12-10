<?PHP
//Santiago Bocel
$Declaracion = "<!DOCTYPE html>";
$HTML = "<html>";
$HEAD = "<head>";
$META =  "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
$TITLE = " <title>PAGINAS WEB CON PHP Y HTML</title>";
$BODY = "<body>";
$Parrafos = "<P style=\"text-align: center; text-align: justify;\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea natus magni numquam? Praesentium autem quaerat, quidem debitis, laboriosam magnam commodi cum unde sapiente asperiores provident quasi, voluptatem soluta aliquid?</P>";
$Imagen  = "  <img align=\"center\" src=\"Imagenes/220px-Tikal.jpg\" alt=\"Chichen Itza\" width=\"220\" height=\"293\"/>";

    // Iniciar codigo HTML
    echo $Declaracion;
    echo $HTML;
    $HTML = "</html>";
    //HEAD
    echo $HEAD;
    echo $META;
    echo $TITLE;
    $HEAD = "</head>";
    echo $HEAD;
    //BODY
    echo $BODY ;
    $BODY = "</body>";
    echo $Parrafos;
    echo $Imagen;
    echo $Parrafos;
    echo $BODY;
   echo $HTML; 
?>