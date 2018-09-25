<!DOCTYPE html>
<meta charset="UTF-8">

<html>

	<head>
		<title>	AIET - log in</title>
		<link rel="stylesheet" type="text/css" href="login-page-style.css">
		<script src="login-page.js"></script>
	</head>

	<body onload="setsize()" onresize="setsize()">
		<form method="post">
		<!--background image-->
		<img src="background.JPG" alt="background" class="img-background" id="img-background">
		<!--Start main-->
		<div class="main" id="main">
			<div class="main1" id="main1">
				<!--Start loginform-->
				<div class="loginform" id="loginform">
					<div class="img-login"></div>
						<h1 class="text">Login</h1>
						<input type="text" name="mail" placeholder="  Your Mail">
						<input type="password" name="password" id="password" placeholder="  Password">
						<h3 class="failedtext" id="failedtext"></h3>
						<input type="submit" name="submit" class="button-login" value="Login">
				</div>
				<!--End loginform-->
			</div>

			<!--line as break-->
			<div class="line"></div>

			<div class="main2" id="main2">
				<!--Start Welcome text-->
				<div class="welcome">
					<h1 class="text1">	Welcome Back to <br> <span class="su">'Smart University'</span>	</h1>
				</div>
				<!--End welcome text-->
				<!--button goto loginform-->
				<div class="goto" id="goto" onclick="gotologin()">
					<div class="goto1"></div>
					<div class="goto2"></div>
					<div class="goto3"></div>
					<div class="goto4"></div>
				</div>
			</div>
		</div>
		<!--End main-->

		<?php
			$conn = new mysqli("localhost" , "root" , "" , "login");
			if(isset($_POST['submit']))
			{
				$mail  	  = $_POST['mail'];
				$password = $_POST['password'];
				$query 	  = "SELECT * FROM mylogin WHERE Email='$mail' AND password='$password'";
				$result   = mysqli_query($conn , $query);
				if(empty($_POST['mail']) or empty($_POST['password']))
					echo "<script> failedtext1(); </script>";
				elseif(mysqli_num_rows($result) >= 1)
					header('Location: first-page.html');
				elseif(mysqli_num_rows($result) == 0) 
					echo "<script> failedtext2(); </script>";
			}
		?>

	</body>

</html>