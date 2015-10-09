<?php
session_start();
if (!isset($_SESSION["user"])) {
	$_SESSION["user"] = "";
}
//変数初期化モジュール
require('modules/module_initialization.php');

	if (isset($_POST["mail"], $_POST["password"])) {
		$mail = $_POST["mail"];
		$password = $_POST["password"];
	}

require_once("DBAdapter.class.php");
$db = new DBAdapter();
$db -> user_check($mail,$password);
if ($db->getuser() == 1) {
	$db -> user_info($mail,$password);
	if (isset($_SESSION["user"])) {
		$_SESSION["user"] = $db->getinfo();
	}
	header("Location: main.php");
}else {
	header("Location: login.php");
}
