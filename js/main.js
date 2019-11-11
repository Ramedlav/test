


$(function () {
    $('#forgot').on('click', function () {
        $.post('../php/recovery_pass/recovery_view.php',function (data) {
            $('#login_conteiner').html(data);
        });

    });

    $('#control_persone').on('click', function () {

    });



    $('#add_persone').on('click', function () {

        $.post('../newUser/View_new.php',function (date) {
            $('#control_persone').html(date);
        });

        // $.post('../select/select_view.php',function (data) {
        //     $('#control_persone').html(data);
        // });
    });

        $('#show_persone').on('click', function () {

            $.post('../select/control_select.php',function (date) {
                $('#all').html(date);
            });

        $.post('../select/select_view.php',function (data) {
            $('#control_persone').html(data);
        });



    // $.post('control_profile.php',
    //    { info: <?php echo $_SESSION['info'];?> },
    //    function (data) {
    //        $('#info').html(data);
    //    });
    });
});
