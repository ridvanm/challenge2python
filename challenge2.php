<?php

 function tips($bill, $guest,$percentage) {
  $bg = $bill / $guest;
  $per = round($bg * ($percentage/100),2);
  $tips = $per * $guest;
 
  return $tips;
  
}

echo " ".tips(160,4,10).' Euro';

?>