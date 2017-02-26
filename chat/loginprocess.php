<?php
	require_once("dbproperties.php");
	session_start();
	if(isset($_POST['username'])){
		$dbconnect = "mysql:host=". HOST.";dbname=".SELECTDB;
		$pdo = new PDO($dbconnect, USER, PASSWORD);
		$sth = $pdo->prepare('insert into user (name,password,age,school,sex,introduction) values (:name,:password,:age,:school,:sex,:introduction)');
		$sth->bindParam(':name', $_POST['username']);
		$sth->bindParam(':password', md5($_POST['password']));
		$sth->bindParam(':age', $_POST['age']);
		$sth->bindParam(':school', $_POST['school']);
		$sth->bindParam(':sex', $_POST['optionsRadios']);
		$sth->bindParam(':introduction', $_POST['introduce']);
		$sth->execute();
		$_SESSION['username'] = $_POST['username'];
		header("location:index.php");
	}else{
		echo "<script>alert('error'); window.location.href='login.html';</script>";
	}
?>