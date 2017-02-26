<?php
	require_once("checklogin.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<link rel=stylesheet type="text/css" href="style.css">
		</script>
	</head>
	<body class="backcolor">
		<div class="row" >
			<div class="col-md-12 col-sm-12 col-xs-12"><br/><br/></div>
		</div>
		<div class="row" >
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<form class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputto3" class="col-sm-2 control-label">給誰</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inpTo" placeholder="輸入收訊者">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">內容</label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" rows="5"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
						<button type="button" id="senddata" class="btn btn-primary btn-lg btn-block">送出</button>
				    </div>
				  </div>
				</form>

			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		
		
	</body>
</html>