<?php
/*
$num=1;
apcu_store('foo',$num+1);
var_dump(apcu_fetch('foo'));
*/
$countFilePath='count.txt';
$initialCount=0;
$count=apcu_fetch($countFilePath);
if($count===false){
  $count=$initialCount;
}

$count++;

apcu_store($countFilePath,$count);
var_dump($count);


?>

