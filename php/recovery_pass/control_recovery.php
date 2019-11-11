<?php
include '../../php/classes/DB.php';
include 'Recovery.php';
$name = $_POST['name'];
$login = $_POST['login'];
if(!empty($_POST)){
    $new = new Pass_Recovery();
    $show = $new->Recovery($login,$name);
    foreach ($show as $key=>$gen){
        foreach ($gen as $item=>$value){
            if($item == 'password') {echo 'your password is "'.$value.'"';};
        }
    }
}

?>