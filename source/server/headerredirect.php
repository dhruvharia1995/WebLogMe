<?php

if(isset($_REQUEST['url']))
{
	$_REQUEST['url'] == 'signup' ? $_REQUEST['url'] = '../signup' :
		 ($_REQUEST['url'] == 'signin' ? $_REQUEST['url'] = "../signin" :
		 	 ($_REQUEST['url'] == 'appr' ? $_REQUEST['url'] = "../blogappr.php" :
			 	 ($_REQUEST['url'] == 'profile' ? $_REQUEST['url'] = "../profile.php" : 
			 	 	($_REQUEST['url'] == 'wp' ? $_REQUEST['url'] = "../signin/?loginAttempt=1" : 
			 	 	($_REQUEST['url'] == 'update' ? $_REQUEST['url'] = "../update.php" : null ) ) ) ) );  

	header("location:".$_REQUEST['url']);
 }

 ?>