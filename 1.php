<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Login </title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/background.css">
		<script type="text/javascript">
			function fpassoverlay(){
				alert("Please Contact Admin");
			}
		</script>
	</head>
	<body>
		<h2><center>RTI APPLICATION SYSTEM</center></h2>
    	<div class="login-page">
		<div class="form">
			<form class="login-form" method="post" action="login.php">
				Username:<input type=text name=name><br><br>
				Password:<input type=password name=pswd><br><br>
				<input class="btn" style="background: #092538; background-image: -webkit-linear-gradient(top, #092538, #088a5a); background-image: -moz-linear-gradient(top, #092538, #088a5a); background-image: -ms-linear-gradient(top, #092538, #088a5a); background-image: -o-linear-gradient(top, #092538, #088a5a);  background-image: linear-gradient(to bottom, #092538, #088a5a); font-family: Arial; font-size: 20px; padding: 10px 16px 10px 16px; text-decoration: none;"type='submit' name ='submit' value='Log in' />
    		</form>
    		<div class="btn" id="fpass" onclick="fpassoverlay()">Forgot Password?</div>
		</div>
	</div>
	</body>
</html>