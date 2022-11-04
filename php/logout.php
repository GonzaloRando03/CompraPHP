<?php
    include_once 'sesion.php';

    $userSession = new Sesion();
    $userSession->close();

    header("location: ../index.php");

?>