<?php
$target = 8; 
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
   var_dump( Find($target,$array)) ;
function Find($target,$array){
    $count=array_merge($array[0],$array[1],$array[2],$array[3]);
     $count1=count($count);
    $cou=in_array($target, $count);
    return $cou;
}
?>