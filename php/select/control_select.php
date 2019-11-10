<?php
include '../../php/classes/DB.php';
include 'Query.php';

$new_select = new Select();
$select = $new_select->Selector();
$str='<table class="change">';
foreach ($select as $arrs){
    $str.= '<tr>';
    foreach($arrs as $key=>$val){
       if($key!='id'){
           $str.='<td>'.$key.'</td><td id="'.$key.$id.'">'.$val.'</td>';
       }else{$id = $val;}
    }
    $str.= '<td><input type="button" class="del" id="'.$id.'" value="Del"></td></tr>';
}
$str.='</table><br><div id="chng"> </div><script type="text/javascript">
 $(\'.del\').on(\'click\', function(){
        var idd = $(this).attr("id");
        $.post(\'../select/adder.php \',
        { id : idd},
        function (data) { 
            console.log(idd);
            $.post(\'../select/control_select.php\',
                function (date) {
                    $("#all").html(date);
                });
        });
    });         
 
 $(\'td\').on(\'click\',function () {

        
        if ($(this).attr("id") ){
            let idd = $(this).attr(\'id\');
        $("#chng").html(" <input class =\'chng\' id="+\'chng_\'+$(this).attr("id")+" value="+$(this).html()+">"+
            "<script type=\'text/javascript\'> " +
             "$(function(){" +
              " $(\".chng\").on(\'keydown\',function(e) { " +
               "if (e.keyCode === 13){ " +
                "$.post(\'../select/adder.php\', { " +
                 "id : $(this).attr(\'id\'), " +
                 "val : $(this).val()}, " +
                   "function (data){" +
                    "$.post(\'../select/control_select.php\',function (date) {"+
                "$(\'#all\').html(date);});" +
                   "}); " +
                   "$(this).remove();" +
               "}" +
              "}); " +
             "});" +
                       "<\/script>");
        console.log($(this).attr(\'id\'));
        }   
        
    });
 
</script>';
echo $str;

?>