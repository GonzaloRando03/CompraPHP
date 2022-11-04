<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'fruteria';
        $this->user     = 'root';
        $this->password = 'root';
        $this->charset  = 'utf8mb4';
    }

    function connect(){
        //parámetros para conectarnos a la base de datos
        $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        //nos conectamos a la base de datos
        $pdo = new PDO($connection, $this->user, $this->password, $options);

        return $pdo;   
    }
}

?>