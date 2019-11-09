<?php
class User extends DB
{
    function loginUser ($name, $password){

        $sql ="SELECT * FROM `users` WHERE login = '$name' AND password = '$password'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $row = $result->fetch_assoc();
        $_SESSION['info'] = $row;
        if ($numRows){

            $_SESSION['login']='true';


        }
        else{ echo 'non correct login or password';
            session_destroy();
        }
    }

}
?>