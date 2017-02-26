<?php
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>alert('尚未註冊');location.href='register.html';</script>";
	}
?>
