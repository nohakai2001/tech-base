# tech-base

こんにちは、横浜市立大学三年の野原海斗です。
今回はtech-baseインターンの一環で、mysqlと連携した簡易掲示板を作成しました。

・post.php
メイン処理のファイルです。名前、コメント、パスワードを入力できます。

・delete.php
削除処理の際に用いるファイルです。whereでidとpassが一致した場合のみ、削除処理を実行します。

・edit.php
編集処理の際に用いるファイルです。whereでidとpassが一致した場合のみ、編集処理を実行します。

・send.php
投稿処理に用いるファイルです。削除・編集処理の際に用いるpassのデータベースへの登録を行います。
