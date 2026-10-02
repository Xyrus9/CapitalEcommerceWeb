<?php
include 'header.php';
include 'connection.php';
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Check Out</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">

<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=The+Nautigal:wght@400;700&family=Vujahday+Script&display=swap"
	rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@400;700&family=Vujahday+Script&display=swap"
	rel="stylesheet">
<style>
body{
	background-color: lightsteelblue;
}
.check input[type=text]{
    padding: 12px 20px;
    margin: 10px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
</head>
<body>
<div class="container">
<center>
		<h1 style="color:black;"><b>Capital</b><i class="fa fa-codepen"></i></h1>
		<h2 style="color:gray;">Order Information</h2>
</center>
</div>
<div class="check">
<center>
	<form>
				<center>
					<input style="width: 12%;"type="text" name="firstname" placeholder="First name..">
					<input style="width: 12%;"type="text" name="lastname" placeholder="Last name.."><br> 
					<input style="width: 25%;"type="text" name="email" placeholder="Your Email"><br>
					<input style="width: 25%;"type="text" name="phone" placeholder="Your Phone Number"><br>
					<input style="width: 25%;"type="text" name="address" placeholder="Your Full Address"><br>
					<input style="width: 25%;"type="text" name="totalitems" placeholder="Total Order Items"><br>
					<input style="width: 25%;"type="text" name="totalprice" placeholder="Total Cost"><br>
					<input style="width: 25%;"type="text" name="payment" placeholder="Enter Payment Method"><br>
				</center>
				<br> <input type="submit" name="submit"
					value="CONFIRM"><br> <br>
			</form>
		<a href="viewproducts.php"style="padding-botton: 20px;background-color: darkred; color: white; font-size: 16px; border-radius: 10px;"class="btn btn-outline-info">Go back to Shopping</a><br><br>
</center>
</div>
</body>
</html>
<?php
require ('db.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['firstname'])) {
    // removes backslashes
    $firstname = stripslashes($_REQUEST['firstname']);
    // escapes special characters in a string
    $firstname = mysqli_real_escape_string($con, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($con, $lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con, $phone);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con, $address);
    $totalitems = stripslashes($_REQUEST['totalitems']);
    $totalitems = mysqli_real_escape_string($con, $totalitems);
    $totalprice = stripslashes($_REQUEST['totalprice']);
    $totalprice = mysqli_real_escape_string($con, $totalprice);
    $payment = stripslashes($_REQUEST['payment']);
    $payment = mysqli_real_escape_string($con, $payment);
    $query = "INSERT into `checkout` (firstname, lastname, email, phone, address, totalitems, totalprice, payment)
                     VALUES ('$firstname', '$lastname', '$email', '$phone', '$address', '$totalitems', '$totalprice', '$payment')";
    $result = mysqli_query($con, $query);
    if ($result) {
    	
        echo "<script>
                    alert('Order Confrimed!!');
                    window.location.href='checkout.php';
                </script>";
    } else {
        echo "<script>
                    alert('Required Fields are missing!!');
                    window.location.href='checkout.php';
                </script>";
    }
}
?>