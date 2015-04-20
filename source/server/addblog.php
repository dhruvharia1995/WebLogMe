<?php 
session_start();

$theameNumber = $_POST['t'];
$blogName = $_POST['n'];
$blogId = str_replace("@","",$_POST['i']);
$blogId = str_replace("/", "", $blogId);
$emailid = $_SESSION['email'];

if(file_exists('../@'.$blogId))
{
	die("idNotAvail");
}
else{
	include("./conn.php");
	if (mysqli_query($con, "UPDATE register SET Blogid = '$blogId',Blogname = '$blogName',apr = 1 WHERE Email = '$emailid'")) {
			mysqli_close($con);
			
			if(mkdir("../@".$blogId , 0700))
			{
				$basePhp = '<!DOCTYPE html><html><head><title><!--t--></title><!--s--><link rel="stylesheet" type="text/css" href="../css/editor.css"/><link href="../__primg/ixon.png" rel="icon" type="image/png" /></head><body><div class="body_wrap" align="center"><div align="center" class="content_wrap"><header><!--h--></header></div><!--[[-Nextpost-]]--></div></body></html>';
				$styledPhp = str_replace('<!--s-->', '<link rel="stylesheet" type="text/css" href="../styles/style_'.$theameNumber.'.css"/>', $basePhp);
				$titledPhp = str_replace('<!--t-->', $blogName, $styledPhp);				
				$headeredPhp = str_replace('<!--h-->',$blogName, $titledPhp);
				if(file_put_contents('../@'.$blogId.'/index.php', $headeredPhp)){
					
					$_SESSION['apr'] = 1;
					$_SESSION['themeNumber'] = $theameNumber;
					$_SESSION['blogName'] = $blogName;
					$_SESSION['blogId'] = $blogId;


					die("done");
				}				
			}	
	}
	else{
		die("query not worked");
	}
}

?>
