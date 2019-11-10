<?php
include '../classes/DB.php';
include 'Query.php';

$new = new Select();
if (!empty($_POST)){
    echo "have ip for kill";
    $id = $_POST['id'];
    $show = $new->Deleter($id);
    return $show;
}

?>