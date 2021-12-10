<?php
    session_start();

    session_unset();

    session_destroy();

    echo "Se cerro sesión correctamente <br/> <br/>";

    echo "<a href='Login.php' > Volver a Login</a>";
?>