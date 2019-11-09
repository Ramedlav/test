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
$str.='</table><script type="text/javascript">
                
                $(\'td\').on(\'click\',function () {
                
                    
                    if ($(this).attr("id") && !$(this).val()){
                        $(this).html("<input class =\'chng\' id="+$(this).attr("id")+" value="+$(this).html()+">");
                        $(this).attr(\'class\') = \'chng\';
                    
                    }
    });
</script>';
echo $str;

?>