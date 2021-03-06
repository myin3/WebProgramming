<?php
	include 'db_connection.php';
	$mysqli = OpenCon();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward disabled">Home</button></a>
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
		<a href="user.php"><button class="buttonstyle reverse"><span class="material-icons" style="font-size:16px;">person</span> Profile </button></a>
	</div>
	<div id="container">
		<div class="content">
			<span class="material-icons icon" style="font-size:120px;">home</span>
			<a href="menu.php"><div class="link">
			<h3>Home</h3>
			<p>Here are the link to help you navigate through the website and find what you need.</p>
			</div></a>
		</div>
		<div class="content">
			<span class="material-icons icon" style="font-size:120px;">local_parking</span>
			<a href="options.php"><div class="link">
			<h3>Parking</h3>
			<p>You can choose your flight and along as which seats you want from here.</p>
			</div></a>
		</div>
		<div class="content">
			<span class="material-icons icon" style="font-size:120px;">shopping_cart</span>
			<a href="shoppingCart.php"><div class="link">
			<h3>Cart</h3>
			<p>Go here to check what flights and seats you have selected, but have not purchased yet.</p>
			</div></a>
		</div>
		<div class="content">
			<span class="material-icons icon" style="font-size:120px;">arrow_forward</span>
			<a href="checkout.php"><div class="link">
			<h3>Checkout</h3>
			<p>Go here to finalize any purchases you have pending to ensure that you get your seats.</p>
			</div></a>
		</div>
	</div>
</body>
</html>