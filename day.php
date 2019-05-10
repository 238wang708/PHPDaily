<?php 
 $string="Have you ever gone shopping and";
   print_r("最先出现3次的字符为".strang($string));
 function strang($string){
    $arr=[];
    $len=strlen($string);

    echo "字符串的长度为".$len;
      echo "<br>";
     for($i=0; $i <$len ; $i++) { 
         if(isset($arr[$string[$i]])){
            $arr[$string[$i]]++;
         }else{
            $arr[$string[$i]]=1;
         }

         if($arr[$string[$i]]>=3){
            return $string[$i];
         }
     }
 }
?>