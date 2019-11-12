<?php
class Adder extends DB{

    function Add_User($name,$login,$password){
        $testQuery = "SELECT * FROM users WHERE login = '".$login."'";
        print $testQuery;
        $result = $this->connect()->query($testQuery);
        while ($row = $result->fetch_assoc()) {
        $result = $row;
        }
        if ($result->num_rows==0){
            $query = "INSERT INTO users ( name, login, password) VALUES ('".$name."','".$login."','".$password."')";
            $this->connect()->query($query);
            echo 'num is '.$row['num_rows'].' User '.$name.' is Added';
        }else{
            echo 'UserName '.$login.' is already exists';
            }
    }
}
?>