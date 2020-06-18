<?php
	
 
	if(isset($_POST['submit'])){
		if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) ||empty($_POST['city']) || empty($_POST['state']) || empty($_POST['country']) || empty($_POST['zip']) || empty($_POST['pass']) || empty($_POST['pass']))
		{
			echo "insert  all data";
		}
     
		else
		{
  			

			$conn = mysqli_connect("localhost" , "root", "");
        
        


			$db = mysqli_select_db($conn , "registration");

		
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$zip = $_POST['zip'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];

		
			$sql = "INSERT INTO `form`(`fname`, `lname`, `email`, `city`, `state`, `country`, `zip`, `pass`, `cpass`) VALUES ('$fname','$lname','$email','$city','$state','$country','$zip','$pass','$cpass')";
		

			//try
		//	{
				if(!mysqli_query($conn , $sql))
				{
					echo "form data is not inserted";
				}

				else{
					echo "inserted sucessfully";
					header("Location: index.php");
				}


			
		  //  } 
		  /*  catch(Exception $ex)
		    {
		 		echo("error".$ex->getMessage());
		 	}*/

 			mysqli_close($conn);
	}





	/*if(mysqli_query($conn , $register_query)) 
	{
		echo "new record created sucessfully";
	}
	else{
		echo "error".$register_query." ".mysqli_error($conn);
	}
*/
		

	}

?>
