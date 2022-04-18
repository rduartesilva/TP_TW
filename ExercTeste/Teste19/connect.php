<?php   

class ALBUMS {
    private $host;
    private $user;
    private $pass;
    private $database;

    function connect(){
        $this->host = "localhost";
        $this->user = "duarte";
        $this->pass = "1234";
        $this->database = "MYMUSIC";

        $dsn = "mysql:host=".$this->host.";database=".$this->database;
        $pdo = new PDO($dsm, $this.user, $this.pass);
        return $pdo;
    }
}

