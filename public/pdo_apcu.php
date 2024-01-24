<?php
$dbh=new PDO('mysql:host=mysql;dbname=techc','root','');

$insert_sth=$dbh->prepare("INSERT INTO hogehoge (text) VALUES (:text)");
$insert_sth->execute([
  ':text'=>"hellow"
]);

$count=$dbh->prepare("SELECT COUNT(*) FROM hogehoge");
$count->execute();
$message=$count->fetchColumn();

echo $message."入室"; 
