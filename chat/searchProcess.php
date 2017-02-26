<?php
	require_once("dbproperties.php");
	if(isset($_POST['date'])){
		$dbconnect = "mysql:host=". HOST.";dbname=".SELECTDB;
		$pdo = new PDO($dbconnect, USER, PASSWORD);
		$d = date("Y-m-d",strtotime($_POST['date']));
		$sql = "select * from read_data where date='$d'";
		$statement = $pdo->query($sql);
		$rows = $statement->fetchAll();
		if($rows){
			echo json_encode($rows);
		}else{
			echo json_encode("fail");
		}
		
	}else{
		echo "error";
	}
?>