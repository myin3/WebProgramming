<?php
	include 'login-submit.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#container {
			background: #eeee;
			color: black;
			width: 25%;
			padding: 5px;
			height: 50%;
		}
	</style>
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward">Home</button></a>
		<a href="inventory.php"><button class="buttonstyle forward">Parking</button></a>
		<a href="shoppingCart.php"><button class="buttonstyle forward">Cart</button></a>
		<a href="checkout.php"><button class="buttonstyle forward disabled">Checkout</button></a>
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
	        if ($num_rows == 0):
	        	echo "Log in first.";
	        else:?>
		<form method="post" action="order.php">
			<h1>Payment Info</h1>
			<table>
				<tr>
					<td>Name:</td>
				</tr>
				<tr>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Card Number:</td>
					<td>Security Code:</td>
				</tr>
				<tr>
					<td><input id="input" onblur="checktype()" type="text" name="number" maxlength="16" size="16" pattern="\d{16}" title="Ensure that you input the entire credit card number" required></td>
					<td><input type="text" name="security" maxlength="3" size="3" pattern="\d{3}" title="Please input the 3 numbered security code" required></td>
				</tr>
				<tr>
					<td>Credit Card Type:</td>
					<td>Expiration Date:</td>
				</tr>
				<tr>
					<td id="type"></td>
					<!--
					<td><select>
						<option value="VISA">VISA</option>
						<option value="MasterCard">MasterCard</option>
						<option value="Discover">Discover</option>
						<option value="American Express">American Express</option>
					</select></td>
				-->
					<td>
						<select>
							<option value="">MM</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						/
						<select>
							<option value="">YY</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Coupon Code:</td>
				</tr>
				<tr>
					<td><input type="text" name="coupon"></td>
				</tr>
				<tr>
					<td>Address:</td>
				</tr>
				<tr>
					<td><input type="text" name="address" required></td>
				</tr>
				<tr>
					<td>Billing Address:</td>
				</tr>
				<tr>
					<td><input type="text" name="billing" required></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
				</tr>
				<tr>
					<td><input type="text" id="phone" name="phone" maxlength="10" size="13" pattern="\d{10}" title="Numbers Only" placeholder="xxx-xxx-xxxx" required></td>
				</tr>
			</table>
			<input type="submit" name="submit">
		</form>
		<?php
		endif;
			?>
		<div>
			<h1>
				<?php
					$row = fetch('username', 'loggedin');
					$result = "SELECT price FROM user WHERE username=\"".$row['username']."\"";
					$priceRow = $mysqli->query($result);
			    	$price = $priceRow->fetch_assoc();
					echo "$".$price['price'];
				?>
			</h1>
		</div>
	</div>

	<script type="text/javascript">
		function checktype() {
			var num = document.getElementById("input").value;
			//num = num.toString();
			if (num.startsWith("4")) {
				document.getElementById("type").innerHTML = "VISA";
			}
			else if (num.startsWith("65")) {
				document.getElementById("type").innerHTML = "Discover";
			}
			else if (num.startsWith("34") || num.startsWith("37")) {
				document.getElementById("type").innerHTML = "American Express";
			}
			else if(num.substring(0, 2) >= 51 && num.substring(0, 2) <= 55){
				document.getElementById("type").innerHTML = "MasterCard";
			}
			else {
				document.getElementById("type").innerHTML = "";
			}
		}
	</script>
</body>
</html>