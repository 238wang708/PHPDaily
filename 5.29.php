<?php
$arr_A=[1,3,6,9]; $arr_B=[2,4,5,8,20];
Combine($arr_A,$arr_B);
function Combine($arr_A,$arr_B){
    $arr='';
    $temp=0;
    foreach ($arr_B as $key => $value) {
        $arr_A[]=$value;
       $arr=$arr_A;

    }
    $count=count($arr);
    for($i=1;$i<$count;$i++){
        for ($j=0; $j <$count-$i ; $j++) { 
            if($arr[$j]>$arr[$j+1]){
               $temp=$arr[$j];
               $arr[$j]=$arr[$j+1];
               $arr[$j+1]=$temp;
            }
        }
    }
    var_dump($arr);
  
}
?>