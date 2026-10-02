<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
	crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css" />
<link
	href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
	rel="stylesheet" type="text/css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>

<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
@import
	url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap')
	;

li.header1 {
	display: inline-block;
}

.header3 {
	display: none;
	position: absolute;
	background-color: none;
}

.header3 a {
	color: white;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.header3 a:hover {
	background-color: white;
}

.header1:hover 

.header3 {
	display: block;
}

body {
	background-color: black;
}

.container {
	padding-bottom: 50px;
}

.navbar-nav>li>a {
	text-transform: uppercase;
	font-size: 12px;
	margin-right: 20px;
	color: #fff
}

.navbar-toggler {
	padding: .20rem .50rem;
	font-size: 1.25rem;
	line-height: 1;
	background-color: transparent;
	border: 1px solid white
}

.nav-link {
	color: #fff !important
}

.wrapper {
	width: 100%;
	position: absolute;
	height: 100%;
	background-color: black;
	clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
	transition: 1s all
}

.navbar-brand {
	color: #fff;
	font-family: 'Allerta Stencil', sans-serif;
	margin-bottom: 4px;
	font-size: 27px
}

.navbar-red:hover .wrapper {
	clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%)
}

.navbar-brand:hover {
	color: #fff
}

.navbar-red {
	background-color: darkred;
	color: red
}

.all-show {
	z-index: 10
}
.header {
	padding-top: 90px;
}
</style>


<body>
	<!-- Navigation-->
<div class="header">
	<nav class="navbar navbar-expand-lg navbar-red fixed-top navbar-dark">
		<div class="wrapper"> </div>
		<div class="container-fluid all-show">
			<a class="navbar-brand" href="home.php"
				style="font-size: 200%; font-style: initial; color: gold; font-family: Georgia, serif;">CAPITAL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mb-2 mb-lg-0"
					style="margin-left: 1300px">
					<li class="header1"><c class="header2" style="font-size: 20px"> <i
							class="fa fa-user" style="font-size: 30px; color: red"></i> Login</c>
						<div class="header3">
							<a class="nav-link" href="adminlogin.php"
								style="background-color: black; font-size: 20px;">Login As Admin</a>
							<a class="nav-link" href="login.php"
								style="font-size: 20px; background-color: black;">User Login/
								Registration</a>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

	<div id="demo" class="carousel slide" data-bs-ride="carousel">

		<!-- Indicators/dots -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0"
				class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		</div>

		<!-- The slideshow/carousel -->
		<div class="carousel-inner">
			<center>
				<div class="carousel-item">
					<img src="images/istock.jpg" class="d-block" style="width: 80%">
					<div class="carousel-caption">
						<h3 style="font-size: 60px; color: white;">CAPITAL</h3>
						<p style="padding-bottom: 400px">We have Everything what You
							Want!!</p>
					</div>
				</div>
				<div class="carousel-item active">
					<img src="images/istock1.jpg" class="d-block" style="width: 80%">
					<div class="carousel-caption">
						<h3 style="font-size: 40px; color: gold;">Please Login to
							Continue!!</h3>
						<a href="login.php"style="padding-botton: 20px;background-color: white; color: black; font-size: 16px;"class="btn btn-outline-info">Let's Go Shopping</a>
						<p style="padding-bottom: 400px">Thank you for visiting Our
							Capital Website <3</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/istock2.jpg" class="d-block" style="width: 80%">
					<div class="carousel-caption">
						<h3 style="font-size: 40px; color: darkred;">NICE TO MEET YOU
							AGAIN!!</h3>
						<p style="padding-bottom: 500px">Thanks for Supporting Our
							Website!!</p>
					</div>
				</div>
			</center>
		</div>
		<br> <br>

		<!-- Left and right controls/icons -->
		<button class="carousel-control-prev" type="button"
			data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next" type="button"
			data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
	</div>

	<!-- Services-->
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase" style="color: aqua;">Services</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet
				consectetur.</h3>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<img style="border-radius: 50px" src="images/cart.jpg" width="100px"
					height="100px">
				<h4 class="my-3" style="color: aqua;">E-Commerce</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Minima maxime quam architecto quo inventore harum
					ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<img style="border-radius: 50px" src="images/com.jpg" width="100px"
					height="100px">
				<h4 class="my-3" style="color: aqua;">Responsive Design</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Minima maxime quam architecto quo inventore harum
					ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<img style="border-radius: 50px" src="images/lock.jpg" width="100px"
					height="100px">
				<h4 class="my-3" style="color: aqua;">Web Security</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Minima maxime quam architecto quo inventore harum
					ex magni, dicta impedit.</p>
			</div>
		</div>
	</div>
	<!-- Contact-->
	<div class="con">
		<center>
			<h2 class="section-heading text-uppercase" style="color: aqua;">Contact
				Us</h2>
			<p style="color: gray">If you can't register or Login!!</p>
		</center>
	</div>
		<div class="cont" style="margin-left: 30%;">
			<form>
					<input style="margin-top: 20px; height: 50px;width: 15%" type="text" name="firstname" placeholder="First name..">
					<input style="margin-top: 20px; height: 50px;width: 15%" type="text" name="lastname" placeholder="Last name.."><br> <input style="margin-top: 20px; height: 50px;width: 35%" 
						type="text" name="email" placeholder="Your Email"><br> 
					<input style="margin-top: 20px; height: 50px;width: 35%" 
						type="text" name="phone" placeholder="Your Phone Number"><br>
					<textarea style="margin-top: 20px; height: 207px; width:50%" id="subject" name="message"
						placeholder="Your Message..(only 255letters)"
						style="height: 207px"></textarea>
				<br> <input style="margin-top: 20px;" type="submit" name="submit"
					value="SUBMIT"><br> <br>
			</form>
		</div>
	<!-- Footer-->
	<div class="con" align="center" style="background-color: darkred;">
		<nav>
			<div class="row">
				<div class="col-sm-4">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.0075410304494!2d96.1280478148896!3d16.825981988417276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194ca13fff6e3%3A0x1334ced7a53c5bbc!2sHledan%20Centre!5e0!3m2!1sen!2smm!4v1641482171560!5m2!1sen!2smm"
						width="500" height="300" style="border: 0;" allowfullscreen=""
						loading="lazy"></iframe>
				</div>
				<div class="col-sm-4">
					<img src="images/facebook.png" width="50px" height="50px"><br> <b
						style="color: white;">https://www.facebook.com/capital</b><br> <img
						src="images/email.png" width="50px" height="50px"> <br> <b
						style="color: white;">capital99@gmail.com</b><br> <img
						src="images/twitter.png" width="50px" height="50px"><br> <b
						style="color: white;">https://www.twitter.com/capital</b><br> <img
						src="images/phone.png" width="50px" height="50px"><br> <b
						style="color: white;">0987654321/0998876541</b>
				</div>
				<div class="col-sm-4">
					<h5 style="color: gold" class="text-uppercase font-weight-bold">About
						CAPITAL</h5>
					<p
						style="text-align: center; padding: 20px; color: white; width: 70%">Lorem
						ipsum dolor sit, amet consectetur adipisicing elit. Expedita
						sapiente sint, nulla, nihil repudiandae commodi voluptatibus
						corrupti animi sequi aliquid magnam debitis, maxime quam
						recusandae harum esse fugiat. Itaque, culpa?</p>
				</div>
			</div>
		</nav>
	</div>
</body>
</head>
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
                    window.location.href='home.php';
                </script>";
    } else {
        echo "<script>
                    alert('Required Fields are missing!!');
                    window.location.href='home.php';
                </script>";
    }
}
?>