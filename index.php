<?php

include_once 'php/user.php';
include_once 'php/sesion.php';

$user = new User();
$sesion = new Sesion();


//si hay sesion iniciada
if(isset($_SESSION['user'])){
    include_once 'pages/compra.php';

//si se realiza un post de username y password
}else if(isset($_POST['username']) && isset($_POST['password'])){
    $userLogin = $_POST['username'];
    $passLogin = $_POST['password'];
    
    if($user-> userExist($userLogin, $passLogin)){
        $sesion-> setUser($userLogin);
        include_once 'pages/compra.php';

    }else{
        $errorLogin = 'Usuario o contraseña incorrectos';
        include_once 'pages/login.php';
    }

//si nada se cumple manda al login
}else{
    include_once 'pages/login.php';
}
?>