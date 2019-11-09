
$(function () {

    $('#control_persone').on('click', function () {
        // console.log('1');


        // if (this.id('1')){this.html('12121221');}
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
