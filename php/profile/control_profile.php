<?php
include 'Profile.php';

            $new= new Profile();
            $show = $new->Show_Info($row);
            echo $show;


?>