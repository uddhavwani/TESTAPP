<?php
	$user=$_GET['u'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>chatter</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
	<script scr="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script scr="javascript/Chat.js"></script>
</head>
<body>
<div class="chatContainer">
	<div class="chatHeader">
	<h3>Welcome <?php echo ucwords($user); ?></h3>
	</div>
	<div class="chatBottom">
		<form action="" onsubmit="return false;" id="chatForm">
		<input type="hidden" id='name' value="<?php echo $user;?>" />
		<input type="text" name="text" id="text" value="" placeholder="type your message" />
		<input type="submit" name="submit" value="Post">	
		</form>
		
	</div>
</div>
</body>
</html>