<?php
	include 'db_connection.php';
	$mysqli = OpenCon();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<style type="text/css">
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: #393e46;
			color: #eeeeee;
		}
		#bar {
			position: fixed;
			top: 0;
			left: 0;
			background: black;
			width: 100%;
			height: 5%;
			align-items: center;
		} 
		.buttonstyle {
			position: relative;
			background-color: inherit;
			border: none;
			color: white;
			padding: 14px 32px;
			height: inherit;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: left;
		}
		.forward {
			left: 20%;
		}
		.reverse {
			left: 40%;
		}
		.buttonstyle:hover {
			background-color: grey;
		}
		.disabled {
			opacity: 0.6;
			cursor: not-allowed;
		}
		#container {
			position: absolute;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			width: 60%;
			top: 10%;
		}
		.content {
			width: 45%;
			padding: 5px;
		}
		.icon {
			position: relative;
			left:25%;
			cursor: default;
		}
		.link {
			background-color: #00adb5;
			padding: 5px;
			width: 80%;
			cursor: pointer;
		}
		.link:after {
			content: '\00bb';
			position: relative;
			left: 95%;
			bottom: 0;
		}
		a {
			text-decoration: none;
			color: inherit;
		}
	</style>
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward ">Home</button></a>
		<a href="options.php"><button class="buttonstyle forward">Parking</button></a>
		<a href="shoppingCart.php"><button class="buttonstyle forward disabled">Cart</button></a>
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

		<?php
	        $result = "SELECT username FROM loggedin";
	        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
	        if ($num_rows == 0) {
	        	echo "Log in first.";
	        }
	        else{
		        $result = "SELECT username FROM shoppingcart";
		        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
		        if ($num_rows == 0) {
		        	echo "Empty Shopping Cart";
		        }
		        else{
		        	$row = fetch('username', 'loggedin');
		        	$result = "SELECT spot FROM shoppingcart WHERE username=\"".$row['username']."\"";

		        	$shoppingCart = $mysqli->query($result);?>

		        	<ul>
	        		<h1>Shopping Cart:</h1>
		        	<?php
		        	while($exit = $shoppingCart->fetch_assoc()){
		        		echo "<li>".$exit['spot']."</li>";
		        	}
		        	?>
		        	<a href="checkout.php"><button class="button">Order!</button></a>
		        	<?php
        		}
        	}
		?>	
	        	</ul>
	</div>
	

</body>
</html>