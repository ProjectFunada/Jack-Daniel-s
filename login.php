 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title></title>
 	</head>
 	<body>
		<h2>login</h2>
		<form action="login_check.php" method="post">
        <p>メールアドレス
            <input type="email" name="mail" pattern="^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$" required>
        </p>
            <p>パスワード
				<input type="password" name="password" maxlength="8" pattern="^[0-9A-Za-z]{8}$" required>
            </p>
			<input type="submit" value="送信">
		</form>
 	</body>
 </html>
