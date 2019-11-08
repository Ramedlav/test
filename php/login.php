<?php
include 'classes/DB.php';
include 'classes/User.php';
include 'classes/Profile.php';

$user = new user();
$login = $_POST['name'];
$pass = $_POST['password'];
$show = $user->loginUser($login,$pass);
echo $show;
?>

<script type="text/javascript">
</script>

