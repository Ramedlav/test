$(function () {



    $('#show_persone').on('click', function () {

            $.post('../select/control_select.php',function (date) {
                $('#control_persone').html(date);
            });

        // $.post('../select/select_view.php',function (data) {
        //     $('#control_persone').html(data);
        // });



    // $.post('control_profile.php',
    //    { info: <?php echo $_SESSION['info'];?> },
    //    function (data) {
    //        $('#info').html(data);
    //    });
    });
});
