<?php
if(isset($_POST['action']))
{
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$date = $_POST["dob"];
	$email = $_POST["email"];
	$password = sha1(md5($_POST["password"]));
	

	include("./conn.php");
	if (mysqli_query($con, "INSERT INTO register(FirstName,LastName,BirthDate,Email,Password)VALUES('$first_name','$last_name','$date','$email','$password')")) {
			mysqli_close($con);
			session_start();
			
			 $_SESSION['fname'] = $first_name;
			 $_SESSION['lname'] = $last_name;
			 $_SESSION['email'] = $email; 
			 $_SESSION['dob'] = $date;
			 $_SESSION['apr'] = 0;

			header("location:headerredirect.php?url=appr");


	} else {
		header("location:headerredirect.php?url=signup");	
	}
	
	

	
}
else{
	header("location:headerredirect.php?url=signup");
}
?>