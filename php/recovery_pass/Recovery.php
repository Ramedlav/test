<?php
class Pass_Recovery extends DB{
    function Recovery($login,$name){
        $query = "SELECT * FROM users WHERE name = '".$name."' AND login ='".$login."'";
        $result = $this->connect()->query($query);
        while ($row = $result->fetch_assoc()) {
        $show[] = $row;
        }
        return  $show;
    }
}
?>