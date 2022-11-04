<?php
include_once 'createTicket.php';

$t_manzanas = $_POST['manzanas'];
$t_naranjas = $_POST['naranjas'];
$t_peras = $_POST['peras'];
$t_fresas = $_POST['fresas'];
$t_melocotones = $_POST['melocotones'];
$t_kiwis = $_POST['kiwis'];
$t_fecha = $_POST['fecha'];

newTicket($t_naranjas, $t_manzanas, $t_peras, $t_fresas, $t_melocotones, $t_kiwis, $t_fecha)

?>