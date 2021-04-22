<?php
	include 'login-submit.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>
	<ul>
		<li>Username: <?php 

		   	$user = fetch('username', 'loggedin');
		   	echo $user['username'];
		?></li>
	</ul>
</body>
</html>