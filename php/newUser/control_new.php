<?php
include '../../php/classes/DB.php';
include 'New_User.php';
$new = new Adder();
echo 'get0';
if (!empty($_POST)){
    echo 'get1';
    $name = $_POST['name'];
    $login= $_POST['login'];
    $password= $_POST['pass'];
    $show = $new->Add_User($name,$login,$password);
    echo $show;
}
?>