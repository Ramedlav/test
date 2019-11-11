<p>Name : </p><input id="name">
<p>Login : </p><input id="login">
<p>Password : </p><input id="pass">
<br>
<input type="button" value="Add" id="Add_new_User">
<script type="text/javascript">
  $('#Add_new_User').on('click',function () {
    $.post('../newUser/control_new.php',{name : $('#name').val(),
        login : $('#login').val(),
        pass : $('#pass').val()}, function (data) {
        console.log(data);
    });
  });
</script>
<?php

?>
