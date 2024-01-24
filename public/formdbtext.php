<?php
$dbh=new PDO('mysql:host=mysql;dbname=techc','root','');

if(isset($_POST['body'])){
  $insert_sth=$dbh->prepare("INSERT INTO hogehoge(text) VALUES(:body)");
  $insert_sth->execute([
    ':body'=>$_POST['body'],
  ]);

header("HTTP/1.1 302 Found");
header("Location: ./formdbtext.php");
return;
}

?>

<form method="POST" action="./formdbtext.php">
  <textarea name="body"></textarea>
  <button type="submit">submit</button>
</form>


<?php 
$select_sth=$dbh->prepare('SELECT * FROM hogehoge ORDER BY created_at DESC');
$select_sth->execute();
$present=$select_sth->fetchColumn();
var_dump($present);

 ?>

<?php 
foreach($select_sth as $row): ?>
<dl>
  <dt>送信日時</dt>
   <dd><?= $row['created_at'] ?></dd>
    <dt>送信内容</dt>
    <dd><?= nl2br(htmlspecialchars($row['text'])) ?></dd>
  </dl>
<?php endforeach ?>





