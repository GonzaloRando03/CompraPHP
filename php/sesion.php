<?php

//manejamos las sesiones que vienen con php por defecto
class Sesion{
    //iniciamos la sesion en el constructor
    public function __construct(){
        session_start();
    }

    //las sesiones se guardan en una variable de php llamada session
    public function setUser($user){
        $_SESSION['user'] = $user;
    }

    public function getUser(){
        return $_SESSION['user'];
    }

    //cerramos la sesion que se volvera a iniciar cuando llamemos al constructor
    public function close(){
        session_unset();
        session_destroy();
    }

}

?>