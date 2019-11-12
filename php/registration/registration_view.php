<?php

?>

<p>login :</p><input id="login">
<p>name :</p><input id="name">
<p>password :</p><input id="pass">
<br>
<input type="button" id="registration" value="Sign Up">
<script type="text/javascript">
$('#registration').on('click',function () {
    $.post('../php/registration/control_registration.php',{
        login : $('#login').val(),
        name : $('#name').val(),
        pass : $('#pass').val()
    },function (data) {
        $('#message').val(data);
    });
});

</script>
<p id="message"></p>
