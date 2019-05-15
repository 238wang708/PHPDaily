<?php 
$string='qsasaqasda';
function start($string){
    $str =strlen($string);
    echo '字符串的长度为';
       print_r($str);
    echo "<br>";
    $arr=[];
    for ($i=0; $i < $str ; $i++) { 
         if(isset($arr[$string[$i]])) {
             $arr[$string[$i]]++;
         }
         else{
            $arr[$string[$i]]=1;
         }

         if ($arr[$string[$i]]>=3) {
              return $string[$i];
         }
    } 
    return $arr;
}
print_r("最先出现3次的次数是".start($string));  
       
?>