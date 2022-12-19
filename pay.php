
<?php
		// Start the session
		require_once 'config.php';

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
        
	 	$invoice = generate_string($permitted_chars, 100);

	 //connect to database

	/*function myConnect(){
		$servername = SERVER_NAME;
		$username = DB_USERNAME;
		$password = DB_PASSWORD;
		$dbname = DB_NAME;
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "INSERT INTO data (name, url, invoice)
		VALUES ('$name', '$url', '$invoice')";
		
		if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		return mysqli_close($conn);
					}
	$val = myConnect();
	*/
		
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>MoMo Payment| ipay</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================--> 
</head>
<body>
	<!--==Use this form to test the api calls and sample test payment====== --->
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="https://manage.ipaygh.com/gateway/checkout" method="post">
				<span class="login100-form-title p-b-37">
					Pay With Momo
				</span>
				
				<input type="hidden" name="merchant_key"  value="<?php echo MERCHANT_KEY ?>">
				<input type="text" name="invoice_id" value="<?php echo $invoice ?>">
				<input type="hidden" name="success_url"  value="https://www.ealivery.com/momo/get.php">
    <input type="hidden" name="cancelled_url" value="https://www.uvitechgh.com">    
    <input type="hidden" name="ipn_url"  value="https://www.ealivery.com/momo/get.php">
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
					<input class="input100" type="text" name="extra_name"
					
					placeholder="Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="text" name="extra_email" 
					
					placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Number">
					<input class="input100" type="text" name="extra_mobile" 
					
					placeholder="Mobile Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Amount">
					<input class="input100" type="text" name="total" placeholder="Amount">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Pay note">
					<input class="input100" type="text" name="description" placeholder=" eg. Payment for goods">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="login100-form-btn">
					<input type="submit" name="submit">	
					</div>
				</div>

			</form>	
			<div><center><a href="https://uvitechgh.com" >Powered By UviTech Inc.</a></center></div>
		</div>
		
	</div>
	
	<div id="dropDownSelect1"><a href="https://uvitechgh.com" >Powered By UviTech Inc.</a> </div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
