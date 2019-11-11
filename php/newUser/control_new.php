<?php
include '../../php/classes/DB.php';
include 'New_User.php';
$new = new Adder();
if (!empty($_POST)){
    $name = $_POST['name'];
    $login= $_POST['login'];
    $password= $_POST['pass'];
    $show = $new->Add_User($name,$login,$password);
    echo $show;
}
?>