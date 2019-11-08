<?php
include 'classes/DB.php';
include 'classes/User.php';
include 'classes/Profile.php';
session_start();
if (isset($_SESSION)) {
    echo '<br> on <br>';
    if (!isset($_SESSION['start_time'])) {
        $_SESSION['start_time'] = date('H:i:s');
    }
    $user = new User();
    $login = $_POST['name'];
    $pass = $_POST['password'];
    $show = $user->loginUser($login,$pass);
    echo $show;
} else {
    echo '<br> off <br>';
}


?>

<script type="text/javascript">
</script>

