<?php

 $invalid='';

 if(isset($_POST['submit'])){
 	if(empty($_POST['email']) || empty($_POST['pass'])) {
 		$invalid = "Incorrect";
 	}
    else
    	 {
    	 	$email=$_POST['email'];
    	 	$pass=$_POST['pass'];

    	 	$conn = mysqli_connect("localhost" , "root", "");
 
    	 	$db = mysqli_select_db($conn , "registration");

    	 	$query = mysqli_query($conn, "SELECT * FROM form WHERE pass='$pass' AND email='$email'");

    	    $rows = mysqli_num_rows($query);

    	    if($rows == 1){
    	    	header("Location: RegActive.php");

    	    }
    	    else{
    	    	$invalid  = "Incorrect";
                
    	    }
    	      mysqli_close($conn);
    	 }
 }
 ?>