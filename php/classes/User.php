<?php
class User extends DB
{
    function loginUser ($name, $password){
        $sql ="SELECT * FROM `users` WHERE login = '$name' AND password = '$password'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $row = $result->fetch_assoc();

        if ($numRows){

            $_SESSION['login']='true';
            $_SESSION['time']=date('H:i:s');

            $new= new Profile();
            $show = $new->Show_Info($row);
            echo $show;
        }
        else{ echo 'non correct login or password';}
    }

}
?>