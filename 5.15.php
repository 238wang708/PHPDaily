<?php
$arr=[1,2,3,4,5,6];
zhu($arr);
function zhu($arr){
    $arr1=[];
    $arr2=[];
   foreach ($arr as $key => $val) {
        if($val%2==1){
            $arr1[]=$val;
        }
        if($val%2==0){
            $arr2[]=$val;
        }

   }

 // var_dump(array_merge($arr1,$arr2)) ;
 print_r(array_merge($arr1,$arr2));
}
?>