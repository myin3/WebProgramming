<?php
	$price;
	include 'db_connection.php';
	$mysqli = OpenCon();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Time Slot Options</title>
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward ">Home</button></a>
		<a href="options.php"><button class="buttonstyle forward disabled">Parking</button></a>
		<a href="shoppingCart.php"><button class="buttonstyle forward ">Cart</button></a>
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
		<a href="user.php"><button class="buttonstyle reverse"><span class="material-icons" style="font-size:16px;">person</span> Profile </button></a>
	</div>
	<div id="container">
		<form action="inventory.php" method="post">
			<input type="Submit" name="time" value="1AM-6AM">
			<input type="Submit" name="time" value="6AM-9AM">
			<input type="Submit" name="time" value="9AM-4PM">
			<input type="Submit" name="time" value="4PM-7PM">
			<input type="Submit" name="time" value="7PM-12AM">
		</form>
	</div>
</body>
</html>