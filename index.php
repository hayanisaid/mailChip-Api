<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>
<!DOCTYPE html>
<html>
<head>
	<title>MailChip API Subscribe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>
<div class="container">
	<div class="text-center">
	<div class="page-header">
		<h3 class="text-primary">MailChip API To Subscribe to MailList</h3>
	</div>
	<div class="alert " aria-dismiss="true" id="data">Your Subscribed Successfully :)</div>
		<form id="mailForm" action="" class="form-inline" method="post"  >
		 <div class="input-group">
		 	
		 	 <input type="email" id="mail" placeholder="yourEmail@email.com" class="form-control" name="mail">
		 	 <span id="subscribe" class="btn input-group-addon"><button id="submit" class="btn btn-default btn-lg">Subscribe</span>
		 </div>
		 
         

		</form>
		<br>
		<br>
		<div class="text-center" >
			<h3 >By <a href="https://www.linkedin.com/in/hayani-said-513335144/" target="_blank">Said Hayani</a></h3>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>
