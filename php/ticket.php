<?php
date_default_timezone_set("Europe/Madrid"); 

require_once 'createTicket.php';
include '../database/db.php';

$database = new DB();

//peso de cada fruta, si no existe la variable no se ha comprado, por lo que el nimero de kilos es 0
$naranjasPost = (isset($_POST["naranjas"])? $_POST["naranjas"]: 0);
$manzanasPost = (isset($_POST["manzanas"])? $_POST["manzanas"]: 0);
$perasPost = (isset($_POST["peras"])? $_POST["peras"]: 0);
$fresasPost = (isset($_POST["fresas"])? $_POST["fresas"]: 0);
$melocotonesPost = (isset($_POST["melocotones"])? $_POST["melocotones"]: 0);
$kiwisPost = (isset($_POST["kiwis"])? $_POST["kiwis"]: 0);

//precio por kilo
$precio_naranjas = 1.5;
$precio_manzanas = 1.4;
$precio_peras = 1.3;
$precio_fresas = 2.8;
$precio_melocotones = 1.2;
$precio_kiwis = 1.1;

//coste de cada fruta comprada
$coste_naranjas = round($precio_naranjas * $naranjasPost, 2);
$coste_manzanas = round($precio_manzanas * $manzanasPost, 2);
$coste_peras = round($precio_peras * $perasPost, 2);
$coste_fresas = round($precio_fresas * $fresasPost, 2);
$coste_melocotones = round($precio_melocotones * $melocotonesPost, 2);
$coste_kiwis = round($precio_kiwis * $kiwisPost, 2);

//coste total
$total = $coste_naranjas + $coste_manzanas + $coste_peras + $coste_fresas + $coste_melocotones + $coste_kiwis;

//fecha actual para el nombre del ticket
$hoy = getdate();
$fechaActual = $hoy["mday"]."-".$hoy["mon"]."-".$hoy["year"]."-".$hoy["hours"]."-".$hoy["minutes"]."-".$hoy["seconds"];

if ($total != 0){
    $query = $database->connect()->prepare('INSERT INTO compras(
        fecha, 
        naranjas, 
        precioNaranjas, 
        manzanas, 
        precioManzanas, 
        peras, 
        precioPeras, 
        fresas, 
        precioFresas, 
        melocotones, 
        precioMelocotones, 
        kiwis, precioKiwis, 
        precioTotal
        ) VALUES(
            :fecha, 
            :naranjas, 
            :precioNaranjas, 
            :manzanas, 
            :precioManzanas, 
            :peras, 
            :precioPeras, 
            :fresas, 
            :precioFresas, 
            :melocotones, 
            :precioMelocotones, 
            :kiwis, 
            :precioKiwis, 
            :precioTotal
        )'
    );

    //mutamos los dos puntos
    $query->execute([':fecha'=> $fechaActual, 
    ':naranjas' => $naranjasPost, 
    ':precioNaranjas'=> $coste_naranjas, 
    ':manzanas'=> $manzanasPost, 
    ':precioManzanas'=> $coste_manzanas, 
    ':peras'=> $perasPost, 
    ':precioPeras'=> $coste_peras, 
    ':fresas'=>$fresasPost, 
    ':precioFresas'=> $coste_fresas, 
    ':melocotones' => $melocotonesPost, 
    ':precioMelocotones'=>$coste_melocotones, 
    ':kiwis'=>$kiwisPost, 
    ':precioKiwis'=> $coste_kiwis, 
    ':precioTotal'=>$total
    ]);

    newTicket($naranjasPost, $manzanasPost, $perasPost, $fresasPost, $melocotonesPost, $kiwisPost, $fechaActual);
}else{
    header("location: ../index.php");
}



?>
