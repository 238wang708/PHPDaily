<?php
  $sum=12;
  echo num($sum);
  function num($sum){
  while ($sum%2==0) {
      $sum=$sum/2;
  }
    while ($sum%3==0) {
      $sum=$sum/3;
  }

    while ($sum%5==0) {
      $sum=$sum/5;
  }


  if($sum==1){
    return "是丑数";
  }else{
    return "不是丑数";
  }
  }
?>