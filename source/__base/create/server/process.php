<?php /*
<!--[[-Nextpost-]]-->
<div class="postArea">
		<div class="postContent">
			Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>Hey Buddy !!<br>
		</div>

	<div class="postTime"><!--[[-Date-]]--></div>
	<div class="postAuther">By <!--[[-au-]]--></div>

</div>
*/ ?>

<?php

function br($n){for($i=0;$i<$n;$i++){echo "<br/>";}}

function createNewPost($newPostContent){
	$pid = 'post_'.time();
	$timeDiv='<div class="postTime">'.date('l jS \of F Y').'</div>';
	$au = '<div class="postAuther">By '.'Jimish Fotariya'.'</div>';
	$stat = $timeDiv.$au; 
	
	$sDiv= '<div class="postArea" id="'.$pid.'"><div class="postContent">';	
	$eDiv= "</div>".$timeDiv.$au.'</div>';

	$newPostContent = "<!--[[-Nextpost-]]-->\n"
		.$sDiv.$newPostContent.$eDiv;
	return($newPostContent);
}

$newPostContent = createNewPost($_POST["d"]);
$filePath = '../../index.html';
$prevData = file_get_contents($filePath);
$nextData = str_replace("<!--[[-Nextpost-]]-->", $newPostContent, $prevData);
if(file_put_contents($filePath, $nextData)){
	die("posted");
}
else{
	die("error");
}
//die(htmlentities($newPostContent));
 ?>

