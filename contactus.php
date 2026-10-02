<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();

?>
<!DOCTYPE html>
<head>
<title>Contact Us</title>
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
body {
	background-color: lightsteelblue;
}

input[type=text], select, textarea {
	width: 80%;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
	margin-left: 10px;
}
.dd h1 {
    font-size: 250%; 
    font-family: 'Vujahday Script', cursive;
}
</style>
</head>
<body>
	<div class="dd border rounded bg-light my-5"
		style="padding: 20px 20px">
		<center><h1><b>Contact Us Today</b></h1></center>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-6">
			<center>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.0075410304494!2d96.1280478148896!3d16.825981988417276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194ca13fff6e3%3A0x1334ced7a53c5bbc!2sHledan%20Centre!5e0!3m2!1sen!2smm!4v1641482171560!5m2!1sen!2smm"
					width="800" height="600" style="border: 0;" loading="lazy"></iframe>
			</center>
		</div>
		<div class="col-sm-6">
			<form>
				<center>
					<input type="text" name="firstname" placeholder="First name.."><br>
					<input type="text" name="lastname" placeholder="Last name.."><br> <input
						type="text" name="email" placeholder="Your Email"><br> <input
						type="text" name="phone" placeholder="Your Phone Number"><br>
					<textarea id="subject" name="message"
						placeholder="Your Message........(only 260letters)"
						style="height: 207px"></textarea>
				</center>
				<br> <input style="margin-left: 90px" type="submit" name="submit"
					value=" SUBMIT "><br> <br>
			</form>
			<br>
		</div>
	</div>


	<div class="con" align="center" style="background-color: darkred;">
		<nav>
			<div class="row">
				<div class="col-sm-3">
					<br> <br> <img src="images/facebook.png"
						style="border-radius: 20px" width="50px" height="50px"><br> <br> <b
						style="color: white;">https://www.facebook.com/capital</b><br> <br>
					<br> <img src="images/email.png" style="border-radius: 20px"
						width="50px" height="50px"> <br> <br> <b style="color: white;">capital99@gmail.com</b><br>
				</div>
				<div class="col-sm-3">
					<br> <br> <img src="images/twitter.png" style="border-radius: 20px"
						width="50px" height="50px"><br> <br> <b style="color: white;">https://www.twitter.com/capital</b><br>
					<br> <br> <img src="images/phone.png" style="border-radius: 20px"
						width="50px" height="50px"><br> <br> <b style="color: white;">0987654321/0998876541</b><br>
				</div>
				<div class="col-sm-6">
					<h5 style="color: gold" class="text-uppercase font-weight-bold">About
						CAPITAL</h5>
					<p style="padding: 20px; color: white; width: 70%">Lorem ipsum
						dolor sit, amet consectetur adipisicing elit. Expedita sapiente
						sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi
						sequi aliquid magnam debitis, maxime quam recusandae harum esse
						fugiat. Itaque, culpa? Lorem ipsum dolor sit, amet consectetur
						adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae
						commodi voluptatibus corrupti animi sequi aliquid magnam debitis,
						maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>
				</div>
			</div>
		</nav>
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
    $message = stripslashes($_REQUEST['message']);
    $message = mysqli_real_escape_string($con, $message);
    $query = "INSERT into `message` (firstname, lastname, email, phone, message)
                     VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>
                    alert('Message Sent Successfully!!');
                    window.location.href='contactus.php';
                </script>";
    } else {
        echo "<script>
                    alert('Required Fields are missing!!');
                    window.location.href='contactus.php';
                </script>";
    }
}
?>