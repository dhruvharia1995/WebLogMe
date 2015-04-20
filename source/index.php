<?php 
/*

** HomePage WebLogMe

If Sessin_start 
	{Redirect profile.php}
Else
	{
		* Create your Blog !
			* SignUp
				[
					-FirstName -LastName
					-Uniq Blog namespace "@nameSpace"
						<Ajax src="avaibleNamespace.php">Check avaiblity</Ajax>
					-Email Id
						<Ajax src="duplicateEmail.php">Check Duplication of Email</Ajax>
					-Password
						<client>Check Strength</client>
					-BirthDate

					-submit
						<CLIENT>
							Chaeck up validation .. 
							Ajx req. to reg.php
						</CLIENT>
						<SERVER src="reg.php">
							check up validation of SESSION,ProperRequest,
							TRUE
								{
									Mysql Register
								}
							FLASE
								{
									REdirect ?error=1001
								}


						</SERVER>
				]

		*ExistingBlog
			* SignIn
				-email
				-pwd
					<client>
						Cjeck for Null=ValidateEmail
						<SERVER src="signInProcess.php.php"></SERVER>
					</client>
		
	}

*/	
include("about.php");
	 ?>

 