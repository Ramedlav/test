<?php
include '../classes/DB.php';
include 'Query.php';
$try = new Select();
if (!empty($_POST)){
    $id = $_POST['id'];
    $val = $_POST['val'];
    $show = $try->Inserter($id,$val);
    print_r ($show);
}

?>