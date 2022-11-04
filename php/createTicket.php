<?php
//import y require
require '../vendor/autoload.php';
use Dompdf\Dompdf;

function newTicket($naranjas, $manzanas, $peras, $fresas, $melocotones, $kiwis, $fecha){

    //precio por kilo
    $precio_naranjas = 1.5;
    $precio_manzanas = 1.4;
    $precio_peras = 1.3;
    $precio_fresas = 2.8;
    $precio_melocotones = 1.2;
    $precio_kiwis = 1.1;

    //coste de cada fruta comprada
    $coste_naranjas = round($precio_naranjas * $naranjas, 2);
    $coste_manzanas = round($precio_manzanas * $manzanas, 2);
    $coste_peras = round($precio_peras * $peras, 2);
    $coste_fresas = round($precio_fresas * $fresas, 2);
    $coste_melocotones = round($precio_melocotones * $melocotones, 2);
    $coste_kiwis = round($precio_kiwis * $kiwis, 2);

    //coste total
    $total = $coste_naranjas + $coste_manzanas + $coste_peras + $coste_fresas + $coste_melocotones + $coste_kiwis;


    //strings para ser representados en el PDF
    $string_naranjas = ($naranjas != 0 ) 
    ? "<span>Naranjas (1,5€/kg).................................$coste_naranjas €</span><br>"
    : "<span style=\"display:none;\"></span>";

    $string_manzanas = ($manzanas != 0) 
    ? "<span>Manzanas (1,4€/kg)...............................$coste_manzanas €</span><br>"
    : "<span style=\"display:none;\"></span>";

    $string_peras = ($peras != 0) 
    ? "<span>Peras (1,3€/kg)......................................$coste_peras €</span><br>"
    : "<span style=\"display:none;\"></span>";

    $string_fresas = ($fresas != 0) 
    ? "<span>Fresas (2,8€/kg)...................................$coste_fresas €</span><br>"
    : "<span style=\"display:none;\"></span>";

    $string_melocotones = ($melocotones != 0) 
    ? "<span>Melocotones (1,2€/kg).............................$coste_melocotones €</span><br>"
    : "<span style=\"display:none;\"></span>";

    $string_kiwis = ($kiwis != 0) 
    ? "<span>Kiwis (1,1€/kg).....................................$coste_kiwis €</span><br>"
    : "<span style=\"display:none;\"></span>";


    //html para el pdf
    $html ="
    <html>
    <div style=\"font-family:monospace;\">
    <div style=\"display: flex;\">
        <h1 style=\"margin-top: 3pc;\">Ticket fruteria.</h1>
    </div>
    Fecha: $fecha
    <div style=\"border-bottom: 2px solid black;\">
        $string_naranjas $string_manzanas $string_peras $string_fresas $string_melocotones $string_kiwis
        <br>
    </div>
    <p>Total: $total €</p>
    </div>
    </html>";

    $dompdf = new Dompdf();
    $dompdf -> load_html($html);
    $dompdf -> render();
    $dompdf -> stream("ticket_$fecha.pdf", array('Attachment'=>'1'));

}

?>