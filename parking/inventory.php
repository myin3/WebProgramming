<?php
	$price;
	include 'db_connection.php';
	$mysqli = OpenCon();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Parking Spots</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div id="bar">
		<a href="menu.php"><button class="buttonstyle forward ">Home</button></a>
		<a href="options.php"><button class="buttonstyle forward disabled">Parking</button></a>
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
	<div class="belownav">
		<h1>Parking Spots</h1>
	</div>
	<div id="container">
		<form action="inventory-submit.php" method="post">
			<div>
			<input type="radio" name="parkingspot" value="A1" id="A1">
			<label for="A1">A1</label>
			<input type="radio" name="parkingspot" value="A2" id="A2">
			<label for="A2">A2</label>
			<input type="radio" name="parkingspot" value="A3" id="A3">
			<label for="A3">A3</label>
			<input type="radio" name="parkingspot" value="A4" id="A4">
			<label for="A4">A4</label>
			<input type="radio" name="parkingspot" value="A5" id="A5">
			<label for="A5">A5</label>
			<input type="radio" name="parkingspot" value="A6" id="A6">
			<label for="A6">A6</label>
			<input type="radio" name="parkingspot" value="A7" id="A7">
			<label for="A7">A7</label>
			<input type="radio" name="parkingspot" value="A8" id="A8">
			<label for="A8">A8</label>
			<input type="radio" name="parkingspot" value="A9" id="A9">
			<label for="A9">A9</label>
			<input type="radio" name="parkingspot" value="A10" id="A10">
			<label for="A10">A10</label>
			</div>
		<br>
			<div>
			<input type="radio" name="parkingspot" value="B1" id="B1">
			<label for="B1">B1</label>
			<input type="radio" name="parkingspot" value="B2" id="B2">
			<label for="B2">B2</label>
			<input type="radio" name="parkingspot" value="B3" id="B3">
			<label for="B3">B3</label>
			<input type="radio" name="parkingspot" value="B4" id="B4">
			<label for="B4">B4</label>
			<input type="radio" name="parkingspot" value="B5" id="B5">
			<label for="B5">B5</label>
			<input type="radio" name="parkingspot" value="B6" id="B6">
			<label for="B6">B6</label>
			<input type="radio" name="parkingspot" value="B7" id="B7">
			<label for="B7">B7</label>
			<input type="radio" name="parkingspot" value="B8" id="B8">
			<label for="B8">B8</label>
			<input type="radio" name="parkingspot" value="B9" id="B9">
			<label for="B9">B9</label>
			<input type="radio" name="parkingspot" value="B10" id="B10">
			<label for="B10">B10</label>
			</div>
		<br>
		<h1>VIP ($100)</h1>
			<div>
			<input type="radio" name="VIP" value="C1" id="C1">
			<label for="C1">C1</label>
			<input type="radio" name="VIP" value="C2" id="C2">
			<label for="C2">C2</label>
			<input type="radio" name="VIP" value="C3" id="C3">
			<label for="C3">C3</label>
			<input type="radio" name="VIP" value="C4" id="C4">
			<label for="C4">C4</label>
			<input type="radio" name="VIP" value="C5" id="C5">
			<label for="C5">C5</label>
			<input type="radio" name="VIP" value="C6" id="C6">
			<label for="C6">C6</label>
			<input type="radio" name="VIP" value="C7" id="C7">
			<label for="C7">C7</label>
			<input type="radio" name="VIP" value="C8" id="C8">
			<label for="C8">C8</label>
			<input type="radio" name="VIP" value="C9" id="C9">
			<label for="C9">C9</label>
			<input type="radio" name="VIP" value="C10" id="C10">
			<label for="C10">C10</label>
			</div>
		<br>
<!-- 			<div>
			<input type="radio" name="D1" value="D1" id="D1">
			<label for="D1">D1</label>
			<input type="radio" name="D2" value="D2" id="D2">
			<label for="D2">D2</label>
			<input type="radio" name="D3" value="D3" id="D3">
			<label for="D3">D3</label>
			<input type="radio" name="D4" value="D4" id="D4">
			<label for="D4">D4</label>
			<input type="radio" name="D5" value="D5" id="D5">
			<label for="D5">D5</label>
			<input type="radio" name="D6" value="D6" id="D6">
			<label for="D6">D6</label>
			<input type="radio" name="D7" value="D7" id="D7">
			<label for="D7">D7</label>
			<input type="radio" name="D8" value="D8" id="D8">
			<label for="D8">D8</label>
			<input type="radio" name="D9" value="D9" id="D9">
			<label for="D9">D9</label>
			<input type="radio" name="D10" value="D10" id="D10">
			<label for="D10">D10</label>
			</div>
		<br> -->
			<div>
				<?php
				$result = "SELECT username FROM loggedin";
		        $num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
		        if ($num_rows == 0) {
		        	echo "Log in first to book a parking spot.";
		        }
		        else{
		        	?>
	        		<?php
					if($_POST['time'] == "1AM-6AM" || $_POST['time'] == "9AM-4PM" || $_POST['time'] == "7PM-12AM"){
						$price = 15;
					}
					else if($_POST['time'] == "6AM-9AM" || $_POST['time'] == "4PM-7PM"){
						$price = 25;
					}


					$user = fetch('username', 'loggedin');
				   	$username = $user['username'];
					$query = "UPDATE user SET price=".$price." WHERE username=\"$username\"";
					$mysqli->query($query);
					?>
					<input id="right" type="submit" value="Submit" name="submit" class="button">
				<?php
				}

				$row = fetch('username', 'loggedin');
				$result = "SELECT Spot FROM parking WHERE avail=0";
				$availRow = $mysqli->query($result);
				$num_rows = mysqli_num_rows(mysqli_query($mysqli, $result));
				$spotArray = [];
				for ($i=0; $i < $num_rows; $i++) { 
					$available = $availRow->fetch_assoc();
					$spotArray[$i] = $available['Spot'];
				}
				//print_r($spotArray);
				?>

			</div>	
		</form>
	</div>
	<script type="text/javascript">
		var arrayLength = "<?php echo $num_rows; ?>";
		var spotsArr = <?php echo json_encode($spotArray); ?>;
		for (var i = 0; i < arrayLength; i++) {
			let doc = document.getElementById(spotsArr[i]);
			doc.setAttribute("style", "opacity:0");
		}
		
		
	</script>
</body>
</html>