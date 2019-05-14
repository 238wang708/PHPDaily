<?php
 $n=5;
 var_dump(ci($n));
 function  ci($n){
 if($n==1||$n==2){
    return $n;
 }else{
    return ci($n-1)+ci($n-2);
 }
 }
?>