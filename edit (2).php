<?php
$dsn='mysql:dbname=tb240052db;host=localhost';
$user = 'tb-240052';
$password = 'mXBSmUwyz2';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));


    $id =$_POST['id']; //変更する投稿番号
    $name = $_POST['name'];
    $comment = $_POST['comment']; //変更したい名前、変更したいコメントは自分で決めること
    $pass=$_POST['pass'];
    $sql = 'UPDATE posts SET name=:name,comment=:comment WHERE id=:id and pass=:pass';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':pass',$pass, PDO::PARAM_STR);
    $stmt->execute();





?>