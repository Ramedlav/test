
<p>input your login :</p><input id="login" >
<p>input your name :</p><input id="name" >
<input type="button" id="recovery" value="recovery password">
<div id="rec"></div>
<script type="text/javascript">
 $('#recovery').on('click',function () {
     $.post('../php/recovery_pass/control_recovery.php',
         {   login: $('#login').val(),
             name : $('#name').val()
         },

         function (data) {
         console.log(data);
             $('#rec').html(data);
         });
 });

</script>
<?php

?>