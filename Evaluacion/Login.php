
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <link rel="stylesheet" href="Style.css">
    <title>Evaluación</title>
</head>
<body>
    <!--SANTIAGO CARLOS ERNESTO BOCEL MORALES-->
    <!--CARNET 2015-095016-->
    <div class="form-wrap">
      <div class="login">
        <h1>Login Intecap PHP</h1>
        <br/>
        <br/>
        <form action="Validar.php" method="POST" name="frm">
        <label for="loginName">User</label>
		    <input type="text" name="User"/>
		    <label for="loginPassword">Password</label>
		    <input type="password" name="Password"/>

        <input class="loginButton" type="submit" name="Log in"/>  

        <!-- <input class="signinButton" type="button" name="sign in" onclick= "document.form1.action = 'signin.php'; document.form1.submit()" /> -->
        </form>  
      </div>
    </div>
    </body>
</body>
</html>