<?php
	require_once("dbproperties.php");
	$dbconnect = "mysql:host=". HOST.";dbname=".SELECTDB;
	$pdo = new PDO($dbconnect, USER, PASSWORD);
	$d = date("Y-m-d");
	$d1 = date("Y-m-d",strtotime("-1 day"));
	$d2 = date("Y-m-d",strtotime("-2 day"));
 	$sql = "select * from read_data where date='$d' or date='$d1' or date='$d2'";
 	$statement = $pdo->query($sql);
 	$rows = $statement->fetchAll();
 	echo json_encode($rows);
?>