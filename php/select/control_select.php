<?php
include '../../php/classes/DB.php';
include 'Select_All.php';

$new_select = new Select();
$select = $new_select->Selector();
print_r($select) ;

?>