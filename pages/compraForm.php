
<form action="php/ticket.php" method="post">
    <?php
        $naranjaInput = ($form === true)
            ?  "<p>Selecciona las frutas que desea comprar:</p>
                <b>Naranjas </b><input type=\"number\" name=\"naranjas\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<p style=\"text-align:justify;\">Pulsa el botón Nueva Compra para comprar</p>";

        $manzanaInput = ($form === true)
            ? "<b>Manzanas </b><input type=\"number\" name=\"manzanas\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<b style=\"display:none;\"></b>";

        $peraInput = ($form === true)
            ? "<b>Peras </b><input type=\"number\" name=\"peras\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<b style=\"display:none;\"></b>";

        $fresaInput = ($form === true)
            ? "<b>Fresas </b><input type=\"number\" name=\"fresas\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<b style=\"display:none;\"></b>";

        $melocotonInput = ($form === true)
            ? "<b>Melocotones </b><input type=\"number\" name=\"melocotones\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<b style=\"display:none;\"></b>";
        
        $kiwiInput = ($form === true)
            ? "<b>Kiwis </b><input type=\"number\" name=\"kiwis\" value=\"0\" min=\"0\" step=\"any\">Kg<br>"
            : "<b style=\"display:none;\"></b>";

        echo "$naranjaInput $manzanaInput $peraInput $fresaInput $melocotonInput $kiwiInput <br>";

        if ($form === true){
            echo "
                <input id=\"compra\" type=\"submit\" value=\"Comprar\"/>
                <input id=\"compra\" type=\"reset\" value=\"Reset\">
            ";
        }


    ?>
    
</form> 
        
   