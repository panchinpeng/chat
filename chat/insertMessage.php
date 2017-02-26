<?php
	require_once("dbproperties.php");
	session_start();
	if(isset($_POST['content']) && isset($_POST['selectdate']) && isset($_SESSION['username'])){
		$content = addslashes($_POST['content']);
		$date = addslashes($_POST['selectdate']);
		$author = addslashes($_SESSION['username']);
		$dbconnect = "mysql:host=". HOST.";dbname=".SELECTDB;
		$pdo = new PDO($dbconnect, USER, PASSWORD);
		$sth = $pdo->prepare('insert into read_data (message,date,author) values (:message,:date,:author)');
		$sth->bindParam(':message', $content);
		$sth->bindParam(':date', $date);
		$sth->bindParam(':author', $author);
		if($sth->execute()){
			echo "新增成功";
		}else{
			echo "新增失敗";
		}

	}else{
		echo "非法動作";
		header("location:index.php");
	}
?>