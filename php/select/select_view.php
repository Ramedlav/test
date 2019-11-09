<?php

?>

<script type="text/javascript">
    $.post('../select/control_select.php',function (date) {
        $('#all').html(date);
    });

</script>
<div id="all"></div>
