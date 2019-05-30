<?php
  $n = 10;
 var_dump(NumberOf1($n)) ;
function  NumberOf1($n){
    $num=decbin($n);
    $nu=substr_count($num, "1");
    return $nu;
}
?>