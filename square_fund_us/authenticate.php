

<?php
	
//set session
if(!isset($_SESSION['user_id_session']) || (trim($_SESSION['user_id_session']) == '')) {
//$username=strip_tags($_GET['username']);
		header("location: index.php");
		exit();
	}


?>