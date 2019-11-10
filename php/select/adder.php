<?php
include '../classes/DB.php';
include 'Query.php';
$try = new Select();

$show = $try->Inserter($id);
echo $id.'<br>';
echo $show;
?>