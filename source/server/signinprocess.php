<?php
if(isset($_POST['actionS']))
{

	$email = $_POST["email"];
	$password = sha1(md5($_POST["password"]));

	include("./conn.php");

	if ($result = mysqli_query($con, "SELECT * FROM register Where Email = '$email' and  Password = '$password';")) {
			mysqli_close($con);
			//session_start();
			$data = mysqli_fetch_array($result);

				//print_r($data);
				session_start();
			 $_SESSION['fname'] = $data['FirstName']; 
			 $_SESSION['lname'] = $data['LastName'];
			 $_SESSION['email'] = $data['Email']; 
			 $_SESSION['dob'] = $data['BirthDate'];
			 $_SESSION['blogId'] = $data['Blogid'];
			 $_SESSION['img'] = $data['img'];
			 $_SESSION['blogName'] = $data['Blogname'];
			 
			header("location:headerredirect.php?url=profile");


	} else {
		header("location:headerredirect.php?url=wp");	
	}
	
	
}
else{
	header("location:headerredirect.php?url=signin");
}
?>