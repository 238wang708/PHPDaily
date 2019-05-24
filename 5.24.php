<?php
$n=1;
$m=100;
function he($n,$m){
  $sum = bcadd($n, $m);
  return $sum;
}
echo $n." "."+"." ".$m." "."=";
var_dump(he($n,$m));
?>