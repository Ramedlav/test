<?php

class Profile {

    function Show_Info($row){
        $_SESSION['time']=date('H:i:s');
        $_SESSION['name']= $row['name'];
        var_dump($_SESSION);
//        if(isset($_SESSION)) {echo '<br> on <br>';}else{echo '<br> off <br>';}

        echo 'start session: '.$_SESSION['start_time'].' <br>';
        echo 'time session:'.$_SESSION['time'].'<br>';
        echo  $_SESSION['name'];
        print_r($row);
    }

}

?>
