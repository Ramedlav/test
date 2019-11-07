<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
$user = new user();
$login = $_POST['name'];
$pass = $_POST['password'];
$show = $user->loginUser($login,$pass);
echo $show;
?>

<script type="text/javascript">
</script>

