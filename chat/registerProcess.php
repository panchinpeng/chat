<?php
	require_once("dbproperties.php");
	session_start();
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = addslashes($_POST['username']);
		$password = addslashes(md5($_POST['password']));
		$dbconnect = "mysql:host=". HOST.";dbname=".SELECTDB;
		$pdo = new PDO($dbconnect, USER, PASSWORD);
		$sql = "select name from user where name='{$username}' and password='{$password}'";
		$result = $pdo->query($sql);
		$row = $result->fetch();
		if($row){
			$_SESSION['username'] = $row['name'];
			echo "success";
		}else{
			echo "查不到紀錄";
		}
		
	}else{
		echo "error";
	}
?>