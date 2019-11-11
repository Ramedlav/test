<?php
class Adder extends DB{

    function Add_User($name,$login,$password){
        $query = "INSERT INTO users ( name, login, password) VALUES ('".$name."','".$login."','".$password."')";
        $this->connect()->query($query);
        return $name;
    }
}
?>