<?php
include '../classes/DB.php';
include 'User.php';
include '../profile/Profile.php';
//session_destroy();
session_start();
if (isset($_SESSION)) {

    if (!isset($_SESSION['start_time'])) {
        $_SESSION['start_time'] = date('H:i:s');
    }
    $user = new User();
    $login = $_POST['name'];
    $pass = $_POST['password'];
    $show = $user->loginUser($login,$pass);

    if ($_SESSION['login']=='true'){
        include '../profile/profile_view.php';
//        echo '<script type="text/javascript">window.location.replace("../profile/profile_view.php");</script>';
    }
}

?>
<script type="text/javascript">

        $.post('../profile/control_profile.php',
            { info: <?php echo $_SESSION['info'];?> },
            function (data) {
                $('#info').html(data);
            });

</script>