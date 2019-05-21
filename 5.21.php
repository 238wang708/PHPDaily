<?php 
$array=[2,4,3,6,3,2,5,5];
function arrsum($array){
    $count=array_count_values($array);
    foreach ($count as $k => $v) {
         if($v==1){
            $new_arr[]=$k;
         }
       
    }
      return $new_arr;
}
  var_dump(arrsum($array)) ;
?>