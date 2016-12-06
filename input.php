<?php
/*  Генератор - это обычная функция. Для возврата значений используется ключевое слово yield
*/
//function mrange($size){
//    $mas=[];
//    for($i=0;$i<$size;$i++){
//        $mas[]=$i;
//    }
//    return $mas;
//}
//
//$arr=mrange(1000000);
//foreach($arr as $v){
//    echo $v.'; ';
//}
//echo '<h3>'.(memory_get_usage()/1024/1024).'</h3>';           //34 мб
$mrange=function($size){
    $mas=[];
    for($i=0;$i<$size;$i++){
        yield $mas[]=$i;
    }

};

$arr=$mrange(1000000);
foreach($arr as $v){
    echo $v.'; ';
}
echo '<h3>'.(memory_get_usage()/1024/1024).'</h3>';         //327 кбайт