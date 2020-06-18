<?php
	include 'Connection.php'

?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			body{background-color:lightblue; margin: 0;}
			h2{text-align: center; margin:0px; padding: 20px; background-color: red; width: 100%; height: 30px; color:white;}
			table{ margin-left: 36%; margin-top: 30px; padding:10px; color:red;}
			tr{margin:10px;}
			td{font-size: 20px;}
			.a{ width:400px; height:25px; margin:8px; border: 1px solid red; border-radius: 15px;}
		</style>
		<script type="text/javascript" src="style.js">
		  //external file
		</script>
	</head>
	<body>
		<h2>REGISTRATION FORM</h2>
		<form action="" method="post" name="myform" id="demo">
			<table>
				<tr>
					<td>
						First Name : 
					</td>
					<td>
						<input class="a" type="text" name="fname" value="">
					</td>
				</tr>
				<tr>
					<td>
						Last Name : 
					</td>
					<td>
						<input class="a" type="text" name="lname" value="">
					</td>
				</tr>
				<tr>
					<td>
						Email : 
					</td>
					<td>
						<input class="a" type="text" name="email" value="">
					</td>
				</tr>
				<tr>
					<td>
						City : 
					</td>
					<td>
						<input class="a" type="text" name="city" value="">
					</td>
				</tr>
				<tr>
					<td>
						State : 
					</td>
					<td>
						<input class="a"  type="text" name="state" value="">
					</td>
				</tr>
				<tr>
					<td>
						Country : 
					</td>
					<td>
						<select name="country" class="a" >
							<option value="">Select Country</option>
							<option value="India">India</option>
							<option value="China">China</option>
							<option value="America">America</option>
 						</select>
					</td>
				</tr>
				<tr>
					<td>
						Zipcode : 
					</td>
					<td>
						<input class="a"  type="text" name="zip" value="">
					</td>
				</tr>
				<tr>
					<td>
						Pasword : 
					</td>
					<td>
						<input class="a"  type="password" name="pass" value="">
					</td>
				</tr>
				<tr>
					<td>
						Conf Password : 
					</td>
					<td>
						<input class="a"  type="password" name="cpass" value="">
					</td>
				</tr>
				<tr>
					<td>
						<input  type="submit" name="submit" value="Submit" onclick="Submit()" style="background-color: red; width: 70px; height: 30px;  ">
					</td>
					<td>
						<input type="submit" name="reset" value="Reset" onclick="Reset()"  style="background-color: red; width: 70px; height: 30px;  ">
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>