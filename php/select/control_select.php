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
       }else{$id=$val;}
    }
    $str.= '</tr>';
}
$str.='</table><br><div id="chng"> </div><script type="text/javascript">
                
 $(\'td\').on(\'click\',function () {
        
        if ($(this).attr("id") ){       
            let idd = $(this).attr(\'id\');
        $("#chng").html(" <input class =\'chng\' id="+\'chng_\'+$(this).attr("id")+" value="+$(this).html()+">"+
            "<script type=\'text/javascript\'> $(function(){ $(\".chng\").on(\'keydown\',function(e) { if (e.keyCode === 13){ $.post(\'../select/adder.php\', { id : $(this).attr(\'id\'), val : $(this).val()}, function (data){" +
             "console.log(data); console.log($("+idd+").attr(\'id\'));}); $(this).remove();}}); });<\/script>");
        console.log($(this).attr(\'id\'));
        }   
        
    });
 
</script>';
echo $str;

?>