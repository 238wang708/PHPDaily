<?php 
$n=1;
$m=13;
  var_dump( zhu($n,$m));
//1.定义函数
function zhu($n,$m){
    $arr=[];
    for ($i=$n; $i <=$m ; $i++) { 
        $arr[]=substr_count($i, 1);
        
    }


 return array_sum($arr);  //返回值
}
?>