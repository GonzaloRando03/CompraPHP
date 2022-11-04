<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <div class="center">
            <div class="login">
                <h1>Login</h1>

                <?php 
                    //si existe la variable errorlogin me imprime el error
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>

                <form action="" method="post">
                    <b>Nombre de usuario </b><br><input type="text" name="username"><br>
                    <br><b>Contraseña </b><br><input type="password" name="password"><br>
                    <br>
                    <input type="submit" value="Aceptar"/>
                </form> 
            </div>
        </div>
    </body>
</html>