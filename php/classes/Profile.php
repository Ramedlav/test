<?php
class Profile extends User {

    function Show_Info($row){
        if (!isset($_SESSION['start_time'])){
            $_SESSION['start_time']=date('H:i:s');
            var_dump($_SESSION['start_time']);
        }
        $_SESSION['name']= $row['name'];
        if(isset($_SESSION)) {echo '<br> on <br>';}else{echo '<br> off <br>';}
        $_SESSION['time']=date('H:i:s');

        echo 'start session: '.$_SESSION['start_time'].' <br>';
        echo 'time session:'.$_SESSION['time'].'<br>';
        echo  $_SESSION['name'];
    }

}
?>
