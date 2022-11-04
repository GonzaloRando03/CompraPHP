<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Compra</title>
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <header>
            <h1>Cesta de la fruteria</h1>
            <div>
                <a href="pages/showCompras.php">Ver compras</a>
                <a href="php/logout.php">Cerrar sesión</a>
            </div>
        </header>
        
        <form class="fruitForm" method="post" action="">
            <input id="compra" type="submit" value="Nueva Compra"/>
            <input style="opacity:0;" type="number" name="comprar" value="1" readonly><br>
        </form>
        <div class="center">
            <div class="compraForm">
                <?php
                    $naranjaForm = false;
                    $manzanaForm = false;
                    $peraForm = false;
                    $fresaForm = false;
                    $melocotonForm = false;
                    $kiwiForm = false;
                    $form = false;

                    if(isset($_POST['comprar'])){
                        $form = true;
                    }

                    if(isset($_POST['manzanaCheck'])){
                        $manzanaForm = true;
                    }

                    if(isset($_POST['peraCheck'])){
                        $peraForm = true;
                    }

                    if(isset($_POST['fresaCheck'])){
                        $fresaForm = true;
                    }

                    if(isset($_POST['melocotonCheck'])){
                        $melocotonForm = true;
                    }

                    if(isset($_POST['kiwiCheck'])){
                        $kiwiForm = true;
                    }

                    if($kiwiForm === true){
                        echo 'asd';
                    }

                    //renderizamos el archivo
                    require_once 'compraForm.php'

                ?>
            </div>
        </div>     
    </body>
</html>


