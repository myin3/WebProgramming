<?php
	include 'login-submit.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward">Home</button></a>
		<a href="options.php"><button class="buttonstyle forward">Parking</button></a>
		<a href="shoppingCart.php"><button class="buttonstyle forward">Cart</button></a>
		<a href="checkout.php"><button class="buttonstyle forward">Checkout</button></a>
		<?php 
			$result = "SELECT username FROM loggedin";
			$num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
			if($num_rows != 0):
		?>
				<a href="logout-submit.php"><button class="buttonstyle reverse"><span class="material-icons" style="font-size:16px;">logout</span> Logout </button></a>
			<?php
				else:
			?>
				<a href="login.php"><button class="buttonstyle reverse"><span class="material-icons" style="font-size:16px;">login</span> Login </button></a>
		<?php endif; ?>
		<a href="user.php"><button class="buttonstyle reverse disabled"><span class="material-icons" style="font-size:16px;">person</span> Profile </button></a>
	</div>
	<div id="container">
		<?php
	        $result = "SELECT username FROM loggedin";
	        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
	        if ($num_rows == 0):
	        	echo "Log in first.";
	        else:?>
		<h1>
			<?php 
			   	$user = fetch('username', 'loggedin');
			   	echo $user['username'];
			?>
			<?php
		        $result = "SELECT username FROM loggedin";
	        	$row = fetch('username', 'loggedin');
	        	$result = "SELECT spot FROM orders WHERE username=\"".$row['username']."\"";

	        	$shoppingCart = $mysqli->query($result);?>

	        	<ul>
        		<h2>Order History:</h2>
	        	<?php
	        	while($exit = $shoppingCart->fetch_assoc()){
	        		echo "<li>".$exit['spot']."</li>";
	        	}
		   	endif;
			?>
		</h1>

	</div>	
</body>
</html>