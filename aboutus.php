<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();

?>
<!DOCTYPE html>

<head>
<title>About Us</title>
<meta charset="utf-8">
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
.testimonial {
	padding-top: 100px;
}

.testimonial .col-4 {
	text-align: center;
	padding: 40px 20px;
	box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
	cursor: pointer;
	transition: transform 0.5s;
}

.testimonial .col-4 img {
	width: 50px;
	margin-top: 20px;
	border-radius: 50%;
}

.testimonial .col-4:hover {
	transform: translateY(-10px);
}

.testimonial .col-4 h3 {
	font-weight: 600;
	color: #555;
	font-size: 16px;
}

body {
	background-color: lightsteelblue;
}

.jumbotron {
	padding-top: 80px;
	background-color: gray;
	color: #ffffff;
}

.cc {
	padding: 40px 30px;
}
</style>

</head>
<body>
	<div class="jumbotron text-center">
		<h1
			style="font-style: initial; color: gold; font-family: 'Libre Baskerville', serif;">
			CAPITAL<i class="fa fa-codepen"></i>
		</h1>
		<p style="font-family: 'Vujahday Script', cursive; font-size: 50px">We
			specialize in Good Quality Products and Good Services</p>
	</div>
	<div class="cc">
		<div class="row">
			<div class="col-sm-8">
				<h2 style="color: darkred; font-family: 'Libre Baskerville', serif;">About
					Company Page</h2>
				<h4>Capital Company Limited is one of the popular grocery marts in
					Yangon, Myanmar. It sells a variety of grocery products. Capital
					Company Limited recognizes the potential benefits of applying the
					emerging E-Commerce strategies and solutions for better customer
					service and business growth.</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut
					erat maximus, scelerisque sem in, elementum sem. Etiam quam velit,
					auctor quis lorem id, aliquam finibus turpis. Praesent neque nisi,
					rhoncus vel rutrum non, consequat pharetra ipsum. Sed vel mauris
					finibus, eleifend erat ac, luctus nisi. Nam vitae purus a mauris
					facilisis maximus. Sed ullamcorper maximus metus, vel dapibus diam
					rutrum at. Donec est mi, posuere et ex vitae, gravida lacinia
					mauris.</p>
				<button
					style="background-color: white; color: black; font-size: 16px;"
					class="btn btn-outline-info">See More</button>
			</div>
			<div class="col-sm-4">
				<img src="images/siginal.jpg" width="300px" height="300px">
			</div>
		</div>
	</div>

	<div class="cc bg-grey">
		<div class="row">
			<div class="col-sm-4">
				<img src="images/globe.png" width="300px" height="300px">
			</div>
			<div class="col-sm-8">
				<h2 style="color: darkred; font-family: 'Libre Baskerville', serif;">Our
					Values</h2>
				<h4>
					<strong>MISSION:</strong> Our mission Lorem ipsum dolor sit amet,
					consectetur adipiscing elit. Proin ut erat maximus, scelerisque sem
					in, elementum sem. Etiam quam velit, auctor quis lorem id, aliquam
					finibus turpis. Praesent neque nisi, rhoncus vel rutrum non,
					consequat pharetra ipsum. Sed vel mauris finibus, eleifend erat ac,
					luctus nisi. Nam vitae purus a mauris facilisis maximus. Sed
					ullamcorper maximus metus, vel dapibus diam rutrum at. Donec est
					mi, posuere et ex vitae, gravida lacinia mauris.
				</h4>
				<p>
					<strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet,
					consectetur adipiscing elit. Proin ut erat maximus, scelerisque sem
					in, elementum sem. Etiam quam velit, auctor quis lorem id, aliquam
					finibus turpis. Praesent neque nisi, rhoncus vel rutrum non,
					consequat pharetra ipsum. Sed vel mauris finibus, eleifend erat ac,
					luctus nisi. Nam vitae purus a mauris facilisis maximus. Sed
					ullamcorper maximus metus, vel dapibus diam rutrum at. Donec est
					mi, posuere et ex vitae, gravida lacinia mauris.
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center">
		<h2 style="color: darkred; font-family: 'Libre Baskerville', serif;">SERVICES</h2>
		<h4>What we offer</h4>
		<br>
		<div class="row" style="font-size: 20px;">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-off"></span>
				<h4>POWER</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-heart"></span>
				<h4>LOVE</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-lock"></span>
				<h4>JOB DONE</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
		<br>
		<br>
		<div class="row" style="font-size: 20px;">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-leaf"></span>
				<h4>GREEN</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-certificate"></span>
				<h4>CERTIFIED</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-wrench"></span>
				<h4>HARD WORK</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
	</div>
	<br>
	<br>

	<div class="testimonial">
		<h2 style="color: darkred; font-family: 'Libre Baskerville', serif;">
			<center>Our Team Members</center>
		</h2>
		<br>
		<div class="small-container">
			<div class="row">
				<div class="col-4">
					<h2 style="color: darkred">Director</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<img src="images/elon.jpg">
					<h3>Kelvin Clover</h3>
				</div>
				<div class="col-4">
					<h2 style="color: darkred">CEO</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<img src="images/mike.jpg">
					<h3>Sai Aung Bhone Khant</h3>
				</div>

				<div class="col-4">
					<h2 style="color: darkred">Co-Founder</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<img src="images/bg.jpg">
					<h3>Yamazaki Sai</h3>
				</div>
			</div>

		</div>
	</div>
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
					<img src="images/facebook.png" width="50px" height="50px"><br>
					<b style="color: white;">https://www.facebook.com/capital</b><br> <img
						src="images/email.png" width="50px" height="50px"> <br>
					<b style="color: white;">capital99@gmail.com</b><br> <img
						src="images/twitter.png" width="50px" height="50px"><br>
					<b style="color: white;">https://www.twitter.com/capital</b><br> <img
						src="images/phone.png" width="50px" height="50px"><br>
					<b style="color: white;">0987654321/0998876541</b>
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
		
		</nav>
	</div>



</body>
</html>
