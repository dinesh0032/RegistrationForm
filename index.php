<?php
	include 'loginserv.php'
?>
<!doctype html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title>Login</title>
 </head>
 <body>
 	<div class="login">
 		<h1 align="center">
 			Login
 		</h1>
 		<form action="" method="post" style="text-align: center;">
 			<input type="text" name="email" placeholder="enter email" id="email"></br></br>
 			<input type="password" name="pass" placeholder="enter password" id="pass"></br></br>
 			<input type="submit" value="Login" name="submit">

 			<span><?php echo $invalid ; ?> </span>

 		</form>
 	</div>
 </body>

</html>