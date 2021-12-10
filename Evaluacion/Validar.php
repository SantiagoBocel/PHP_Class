<?php
$User_Valido = "Intecap";
$Contraseña = "prueba123";
$User_Enviado =$_POST['User'];
$Password = $_POST['Password'];
if($User_Valido != $User_Enviado || $Password != $Contraseña)
{
    echo "<p>Usuario Distinto o contraseña incorrectas</p>";
    echo " <form action='Login.php'>
    <input type='submit' name='Log in'>   
    </form>";
    
}
else{
    echo "<p>Usuario Valido</p>";
    session_start();
    $_SESSION['User'] = $User_Enviado;
    header("Location: Ingreso.php");
    die();
}
?>