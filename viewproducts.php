<?php
include 'header.php';
include 'connection.php';
$sql = $db->prepare("SELECT * FROM item");
$sql->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
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
<style type="text/css">
body {
	background-color: lightsteelblue;
}

.card {
	padding: 20px 20px;
	margin: 40px 40px;
	border-radius: 15px
}
.jumbotron {
	padding-top: 80px;
	background-color: black;
	color: #ffffff;
}
</style>
</head>
<body>
<div class="jumbotron text-center">
		<h1
			style="font-style: initial; color: gold; font-family: 'Libre Baskerville', serif;">
			CAPITAL<i class="fa fa-codepen"></i>
		</h1>
		<p style="font-family: 'Vujahday Script', cursive; font-size: 50px">
			Available Products For Now!!
		</p>
	</div>
	<!-- display products -->
	<div class="row">

		<?php

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    ?>

            <div class="col-sm-3" align="center">
			<form method="post" action="manage_cart.php">
				<div class="card">
					<center>
						<img src="images/<?php echo $photo; ?>" width="150" height="150"><br>
					</center>

					<b style="font-size: 20px"><?php echo $name; ?></b><br>
              (<?php echo $category; ?>)<br>
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
