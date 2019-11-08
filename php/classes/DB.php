<?php

class DB {
    private $server;
    private $user;
    private $password;
    private $bd;

    protected function connect(){
//        why you are initialize this params?
        $this->server ="localhost";
        $this->user = "root";
        $this->password = "";
        $this->bd = "eye_db";
//        --------

        $conn = new mysqli( $this->server ="localhost",
            $this->user = "root",
            $this->password = "",
            $this->bd = "new_db"
        );
        if (!$conn){echo "Connection to database failed";}
        return $conn;
    }

}

?>