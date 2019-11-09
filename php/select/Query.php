<?php
class Select extends DB {
    function Selector(){
        $query = "SELECT * FROM `users`";
        $result=$this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $show[]=$row;
        }
        return $show;
    }
}
?>
