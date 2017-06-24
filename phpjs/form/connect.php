<?php
	include "../classes/cbSQLConnect.class.php";
	date_default_timezone_set("Asia/Ho_Chi_Minh");


	$databaseSetup = new cbSQLConnectConfig(
		cbSQLConnectVar::DB_MYSQL,
		"localhost",
		"3306",
		"mybookmarks",
		"root",
		""
		);

?>