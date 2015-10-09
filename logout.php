<?php
    session_start();
    $_SESSION = array();
    session_destroy();
?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title></title>
 	</head>
 	<body>
		<h2>ログアウトOK</h2>
		<p><a href="index.php">戻る</a></p>
 	</body>
 </html>
