<?php
$n=1;
$m=5;
function he($n,$m){
    $arr=range($n, $m);
    $res=array_sum($arr);
    return $res;

} 
echo $n."与".$m."之间的和是";
var_dump(he($n,$m));
?>