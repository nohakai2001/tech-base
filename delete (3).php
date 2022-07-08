<?php
$dsn='mysql:dbname=tb240052db;host=localhost';
$user = 'tb-240052';
$password = 'mXBSmUwyz2';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));





$id=$_POST["id"];
$pass=$_POST["pass"];
$sql='delete from posts where id=:id and pass=:pass';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':pass',$pass, PDO::PARAM_STR);
$stmt->execute();






?>