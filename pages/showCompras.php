<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de compras</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <header>
            <h1>Lista de compras</h1>
            <div>
                <a href="../index.php">Nueva compra</a>
                <a href="../php/logout.php">Cerrar sesión</a>
            </div>
        </header>
        <div class="center">
            <table>
                <tr>
                    <th><b>Fecha </b></th>
                    <th><b>Naranjas (kg) </b></th>
                    <th><b>Manzanas (kg)</b></th>
                    <th><b>Peras (kg)</b></th>
                    <th><b>Fresas (kg)</b></th>
                    <th><b>Melocotones (kg)</b></th>
                    <th><b>Kiwis (kg)</b></th>
                    <th><b>Total</b></th>
                    <th><b>Descargar ticket</b></th>
                </tr>
                <?php
                
                include '../database/db.php';
                $database = new DB();

                $query = $database->connect()->query('SELECT * FROM compras');

                while ($compra = $query->fetch()){
                    $q_fecha = $compra['fecha'];
                    $q_naranjas = $compra['naranjas'];
                    $q_precioNaranjas = $compra['precioNaranjas'];
                    $q_manzanas = $compra['manzanas'];
                    $q_precioManzanas = $compra['precioManzanas'];
                    $q_peras = $compra['peras'];
                    $q_precioPeras = $compra['precioPeras'];
                    $q_fresas = $compra['fresas'];
                    $q_precioFresas = $compra['precioFresas'];
                    $q_melocotones = $compra['melocotones'];
                    $q_precioMelocotones = $compra['precioMelocotones'];
                    $q_kiwis = $compra['kiwis'];
                    $q_precioKiwis = $compra['precioKiwis'];
                    $q_total = $compra['precioTotal'];


                    echo "
                    <tr>
                        <td id=\"fecha\">$q_fecha</td>
                        <td id=\"naranjas\">Peso:$q_naranjas kg  Coste:$q_precioNaranjas €</td>
                        <td id=\"manzanas\">Peso:$q_manzanas kg  Coste:$q_precioManzanas €</td>
                        <td id=\"peras\">Peso:$q_peras kg  Coste:$q_precioPeras €</td>
                        <td id=\"fresas\">Peso:$q_fresas kg  Coste:$q_precioFresas €</td>
                        <td id=\"melocotones\">Peso:$q_melocotones kg  Coste:$q_precioMelocotones €</td>
                        <td id=\"kiwis\">Peso:$q_kiwis kg  Coste:$q_precioKiwis €</td>
                        <td id=\"total\">$q_total</td>
                        <td id=\"ticket\">
                            <form action=\"../php/downloadTicket.php\" method=\"post\">
                                <input class=\"none\" type=\"number\" readonly  name=\"naranjas\" value=\"$q_naranjas\">
                                <input class=\"none\" type=\"number\" readonly  name=\"manzanas\" value=\"$q_manzanas\">
                                <input class=\"none\" type=\"number\" readonly  name=\"peras\" value=\"$q_peras\">
                                <input class=\"none\" type=\"number\" readonly  name=\"fresas\" value=\"$q_fresas\">
                                <input class=\"none\" type=\"number\" readonly  name=\"melocotones\" value=\"$q_melocotones\">
                                <input class=\"none\" type=\"number\" readonly  name=\"kiwis\" value=\"$q_kiwis\">
                                <input class=\"none\" type=\"text\" readonly  name=\"fecha\" value=\"$q_fecha\">
                                <input class=\"download\" type=\"submit\" value=\"Ticket\"/>
                            </form>
                        </td>
                    </tr>
                    ";
                }

                ?>
            </table>
        </div>
    </body>
</html>