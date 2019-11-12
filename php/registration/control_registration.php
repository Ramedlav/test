<?php
include '../../php/classes/DB.php';
include '../../php/newUser/New_User.php';
if (!empty($_POST)){
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $new = new Adder();
    $show = $new->Add_User($name,$login,$password);
    echo $show;
}
?>