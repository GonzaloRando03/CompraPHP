<?php
include 'database/db.php';

class User extends DB{

    public function userExist($user, $pass){
        $seed = '$2a$07$asdflk28763lkjdlkfjuehe234$';
        $passwordCript = crypt($pass, $seed);

        //los dos puntos podremos mutarlos con variables
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');

        //mutamos los dos puntos
        $query->execute(['user' => $user, 'pass' => $passwordCript]);

        //comprueba si retorna algo
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

}

?>