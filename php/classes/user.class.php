<?php
class user extends dbc
{
    function loginUser ($name, $password){
        $sql ="SELECT * FROM `users` WHERE login = '$name' AND password = '$password'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $row = $result->fetch_assoc();
        $i=0;
        if ($numRows){
            $_SESSION['login']='true';
            $_SESSION['name']=$row['name'];
            if (!isset($_SESSION['start_time'])){
                var_dump($i++);
                $_SESSION['start_time']=date('H:i:s');

            }
            if(!isset($_SESSION)) {echo '<br> on <br>';}else{echo '<br> off <br>';}
            $_SESSION['time']=date('H:i:s');
            echo 'start session: '.$_SESSION['start_time'].' <br>
                 time session:'.$_SESSION['time'].'<br>
                 '.$_SESSION['name'];
        }
        else{ echo 'non correct login or password';}
    }

}
?>