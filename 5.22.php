<?php
$str = "student. a am I";
  var_dump(ReverseSentence($str))   ;
function ReverseSentence($str){
    $arr=explode(" ", $str);
    $arr=array_reverse($arr);
    $res = implode(" ", $arr);
     return $res;
}
?>