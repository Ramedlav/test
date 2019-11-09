<?php

?>

<script type="text/javascript">
    $.post('control_select.php',function (date) {
        $('#all').html(date);
    });
</script>
<div id="all"></div>
