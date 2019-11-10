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
    function Inserter($str){
        return ($str);
        $str = substr("$str", 5);
        $id = substr("$str", strlen($str-2));
        $str = substr("$str",0, strlen($str-2));
        echo '<br>'.$id.' '.$str.'<br>';
//        $query = "UPDATE ";

    }
}
?>
