<!doctype html>
<meta charset="UTF-8">
<?php
$id = null;
$name = $_POST["name"];
$comment = $_POST["comment"];
$pass=$_POST["pass"];
date_default_timezone_set('Asia/Tokyo');
$created_at = date("Y-m-d H:i:s");
//DB接続情報を設定します。
$dsn='mysql:dbname=**********;host=*******';
$user = '******';
$password = '*******';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
//ここで「DB接続NG」だった場合、接続情報に誤りがあります。
if ($pdo) {
    echo "DB接続OK";
} else {
    echo "DB接続NG";
}
//SQLを実行。
$regist = $pdo->prepare("INSERT INTO posts(id, name, comment, pass) VALUES (:id,:name,:comment,:pass)");
$regist->bindParam(":id", $id);
$regist->bindParam(":name", $name);
$regist->bindParam(":comment", $comment);
$regist->bindParam(":pass", $pass);
$regist->execute();
//ここで「登録失敗」だった場合、SQL文に誤りがあります。
if ($regist) {
    echo "登録成功";
} else {
    echo "登録失敗";
}
?>
