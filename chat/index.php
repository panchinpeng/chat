<?php
	require_once("checklogin.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<link rel=stylesheet type="text/css" href="style.css">
		</script>
		<script>
			$(function(){
				$.post('catchread.php',function(data){
					for(var i =0; i<data.length; i++){
						if(i % 2 == 0){
							$("#readcontent").append('<div class="well well-sm" align="right"><b>' + data[i][2] + '</b><p>'+ data[i][1] +'</p></p><p><b>'+data[i][3]+'</b></p>'+ '</div>');
						}else{
							$("#readcontent").append('<div class="well well-sm" align="left"><b>' + data[i][2] + '</b><p>'+ data[i][1] +'</p><p><b>'+data[i][3]+'</b></p>'+ '</div>');
						}
					
					}
				},"json");
				$("#senddata").click(function(){
					var content = $("#content").val();
					var date = $("#selectdate").val();
					if(content =="" || date == ""){
						alert("資料未填完整");
						return;
					}
					$.post("insertMessage.php",{
						content : content,
						selectdate : date
					},function(data){
						alert(data);
					})
				})
				$("#searchbtn").click(function(){
					var d = $("#search").val();
					if(d == ""){
						alert("請輸入時間");
					}
					$.post("searchProcess.php",{
						date : d
					},function(data){
						if(data == "fail"){
							alert("查無資料");
						}else{
							$("#readcontent").empty();
							for(var i = 0; i < data.length; i++){
								if(i % 2 == 0){
									$("#readcontent").append('<div class="well well-sm" align="right"><b>' + data[i][2] + '</b><p>'+ data[i][1] +'</p></p><p><b>'+data[i][3]+'</b></p>'+ '</div>');
								}else{
									$("#readcontent").append('<div class="well well-sm" align="left"><b>' + data[i][2] + '</b><p>'+ data[i][1] +'</p></p><p><b>'+data[i][3]+'</b></p>'+ '</div>');
								}
								
							}
						}
						
					},'json');
				})
				$("#logoutbtn").click(function(){
					location.href="logout.php";
				})
				$('#SendMessagebtn').click(function(){
					location.href="sendMessage.php";
				})
			})
		</script>
	</head>
	<body class="backcolor">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-9">
				

			</div>
			<div class="col-md-3 col-sm-3 col-xs-3">
				<div class="btn-group" role="group">
				  <button type="button" id="SendMessagebtn" class="btn btn-default">傳送訊息</button>
				  <button type="button" id="logoutbtn" class="btn btn-default">登出</button>
				  <button type="button" id="messagebtn"class="btn btn-default">訊息</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1">
			</div>
			<div class="col-md-5 col-sm-5 col-xs-5">
				
				<div class="row" >
					<div class="col-md-10 col-sm-10 col-xs-10">
						<input type="date" class="form-control" id="search" placeholder="輸入日期">
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<button id="searchbtn" class="btn btn-default">查詢</button>
					</div>
				</div>
				<hr/>
				<div id="readcontent" ></div>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-5">
				<div class="input panel panel-default">
				  <div class="panel-body">
				  	<textarea id="content" class="form-control" rows="5" cols="10"placeholder="請輸入今日讀書內容"></textarea>
					<input type="date" class="form-control" id="selectdate"/>
					<button type="button" id="senddata" class="btn btn-primary btn-lg btn-block">送出</button>
				  </div>
				</div>
				
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4" ></div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4"></div>
		</div>
	</body>
</html>