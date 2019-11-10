<?php
include '../classes/DB.php';
include 'Query.php';
$try = new Select();
if (!empty($_POST)){
    $id = $_POST['id'];
    $show = $try->Inserter($id);
    echo $id.'<br>';
    echo $show;
}

?>