

<?php
//DB接続情報を設定します。
$dsn='mysql:dbname=tb240052db;host=localhost';
$user = 'tb-240052';
$password = 'mXBSmUwyz2';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    $sql = "CREATE TABLE IF NOT EXISTS posts"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name char(32),"
    . "comment TEXT,"
    . "pass TEXT"
    .");";
    $stmt = $pdo->query($sql);


//SQLを実行。
$regist = $pdo->prepare("SELECT * FROM posts");
$regist->execute();
//ここで「登録失敗」だった場合、SQL文に誤りがあります。

?>




<!DOCTYPE html>
<meta charset="UTF-8">
<title>掲示板サンプル</title>
<h1>掲示板サンプル</h1>
<section>
    <h2>新規投稿</h2>
    <form action="send.php" method="post">
        名前 : <input type="text" name="name" value=""><br>
        投稿内容: <input type="text" name="comment" value=""><br>
        パスワード：<input type="text" name="pass" value=""><br>
        <button type="submit">投稿</button>
    </form>
    <form action="delete.php" method="post">
        削除番号<input type="text" name="id" value=""><br>
        パスワード：<input type="text" name="pass" value=""><br>
        <button type="submit">削除</button>
    </form>
    <form action="edit.php" method="post">
	編集対象番号:<input type="text" name="id"><br>
	名前 : <input type="text" name="name" value=""><br>
	投稿内容: <input type="text" name="comment" value=""><br>
	パスワード：<input type="text" name="pass" value=""><br>
	<button type="submit">編集</button>
	</form>
</section>

<section>
	<h2>投稿内容一覧</h2>
		<?php foreach($regist as $loop):?>
			<div>No：<?php echo $loop['id']?></div>
			<div>名前：<?php echo $loop['name']?></div>
			<div>投稿内容：<?php echo $loop['comment']?></div>
			<div>------------------------------------------</div>
		<?php endforeach;?>
</section>
	
</section>