<?php
class Select extends DB{
    function Selector()
    {
        $query = "SELECT * FROM `users`";
        $result = $this->connect()->query($query);
        while ($row = $result->fetch_assoc()) {
            $show[] = $row;
        }
        return $show;
    }

    function Inserter($str, $val){

        $str = substr("$str", 5);
        $num = (strlen($str)) - 1;
        $id = substr("$str", $num);
        $str = substr("$str", 0, $num);
        $query = "UPDATE users SET " . $str . " = '" . $val . "' WHERE id = " . $id . " ";
            $this->connect()->query($query);
            return ($val);
    }

    function Deleter($id){
        $query = "DELETE FROM users WHERE id = ". $id ;
        $result = $this->connect()->query($query);
        return $result;
    }
}
?>

