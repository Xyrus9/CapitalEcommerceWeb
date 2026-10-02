<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item LIMIT 6 OFFSET 6");
$sql->execute();

?>
<!DOCTYPE html>
<head>
<title>Promotion</title>
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
body {
	background-color: black;
}
.card {
	padding: 40px 40px;
	margin: 80px 80px;
	border-radius: 15px
}

.cc {
	padding: 40px 30px;
}
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
	color: white;
	font-size: 16px;
}

.fa.fa-quote-left {
	font-size: 34px;
	color: gold;
}

.small-container h1 {
    font-family: 'Vujahday Script', cursive; 
    font-size: 50px;
    color: chocolate;
	padding: 20px 20px;
}
</style>

</head>
<body>
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
					<img src="images/jan.jpg" class="d-block" style="width: 80%">
					<div class="carousel-caption">
						<h1 style="font-size: 60px; color: darkred; font-family: 'Libre Baskerville', serif;">BIG PROMOTION</h1>
						<p style="font-family: 'Vujahday Script', cursive; color: black; font-size: 50px;padding-bottom: 700px">
				<b>Happy January of 2022!!</b>
			</p>
					</div>
				</div>
				<div class="carousel-item active">
					<img src="images/frr.png" class="d-block" style="width: 80%">
					<div class="carousel-caption">
				<h1 style="font-style: initial; color: aqua; font-family: 'Libre Baskerville', serif; font-size: 50px">
				<b>CAPITAL<i class="fa fa-codepen"></i></b></h1>
			<p style="font-family: 'Vujahday Script', cursive; color: black; font-size: 50px;padding-bottom: 600px">
				<b>BUY 1 Free Get 1 Promotion In First Month of 2022!!</b>
			</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/pp.png" class="d-block" style="width: 80%">
					<div class="carousel-caption">
					<h1 style="font-style: initial; color: black; font-family: 'Libre Baskerville', serif; font-size: 50px; padding-bottom: 650px;">
					Only for JANUARY Of 2022!!</h1>
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
	<!-- display products -->
	<div class="row">

		<?php

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    ?>

<div class="col-sm-4" align="center">
			<form method="post" action="manage_cart.php">
				<div class="card">
					<center>
						<img src="images/<?php echo $photo; ?>" width="150" height="150"><br>
					</center>
					<b style="font-size: 20px"><?php echo $name; ?></b><br>
        <?php echo $category; ?><br>
        Price : $<?php echo $price; ?><br> <a
						href="detail.php?eid=<?php echo $IID; ?>"
						style="margin-top: 10px; border-radius: 12px; background-color: darkred; color: gold; font-size: 14px;"
						class="btn btn-outline-info">View Detail</a> <input type="hidden"
						name="name" value="<?php echo $name; ?>"> <input type="hidden"
						name="category" value="<?php echo $category; ?>"> <input
						type="hidden" name="price" value="<?php echo $price; ?>">
					<button type="submit" class="btn btn-info" name="buy"
						style="margin-top: 10px; border-radius: 12px; background-color: black; color: gold;">Add
						To Buy</button>
					<br> <br>
				</div>
			</form>
		</div>
          <?php } ?>
        </div>
    <!-- display reviews -->
	<div class="testimonial">
		<div class="small-container">
			<center>
				<h1>Customer Reviews</h1>
			</center>
			<div class="row">
				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<div class="rating"style="color:gold">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star-o"></i>
					</div>
					<img src="images/elon.jpg">
					<h3>Elon Musk</h3>
				</div>
				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<div class="rating"style="color:gold">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i>
					</div>
					<img src="images/mike.jpg">
					<h3>Mike Tyson</h3>
				</div>

				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
						ut erat maximus, scelerisque sem in, elementum sem. Etiam quam
						velit, auctor quis lorem id, aliquam finibus turpis. Praesent
						neque nisi, rhoncus vel rutrum non, consequat pharetra ipsum. Sed
						vel mauris finibus, eleifend erat ac, luctus nisi. Nam vitae purus
						a mauris facilisis maximus. Sed ullamcorper maximus metus, vel
						dapibus diam rutrum at. Donec est mi, posuere et ex vitae, gravida
						lacinia mauris.</p>
					<div class="rating"style="color:gold">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star-o"></i>
					</div>
					<img src="images/bg.jpg">
					<h3>Bill Gate</h3>
				</div>
			</div>

		</div>
	</div>
	<!-- footer -->
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
</html>
