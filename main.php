<?php
session_start();
//変数初期化モジュール
require('modules/module_initialization.php');

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}else {
    $name = $_SESSION["user"];
}
 ?>
  <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title></title>
 	</head>
 	<body>
		<h2>SNS</h2>
        <p>投稿</p>
        <form class="" action="memo_add.php" method="post">
            <input type="text" name="name" value='<?php echo $name; ?>' readonly required><br>
            <textarea  name="memo" cols="20" rows="4" maxlength="80" placeholder="内容をご記入ください"></textarea>
            <input type="submit" value="送信">
        </form>
        <?php
            require_once("DBAdapter.class.php");
            $db = new DBAdapter();
            $db -> comment_view();
         ?>
         <p><a href="logout.php">ログアウト</a></p>
 	</body>
 </html>
