<?php
include 'header.php';
include 'connection.php';
$eid = $_GET['eid'];

$sql = $db->prepare("SELECT * FROM item WHERE IID='$eid'");
$sql->execute();

$row = $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>
<html>
<head>
<title>Detail Data</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<style>
.container {
	margin: 50px auto;
	width: 100%;
	padding-top: 50px;
	border-radius: 5px;
	background-color: Lightsteelblue;
	padding-bottom: 50px;
}

.container b {
	font-size: 120%;
	font-style: initial;
	font-family: Georgia, serif;
	margin-left: 350px;
}
</style>
<body>
	<div class="container col-sm-12">
		<form method="post" action="manage_cart.php">
			<div>
				<center>
					<img src="images/<?php echo $photo; ?>" width="280" height="300">
				</center>
				<br> <b>Item Code: <c style="color:darkred"><?php echo $IID; ?></c></b><br>
				<br> <b>Item Name: <c style="color:darkred"><?php echo $name; ?></c>
				</b><br> <br> <b>Category of Item: <c style="color:darkred">(<?php echo $category; ?>)</c></b><br>
				<br> <b>Price: $<c style="color:darkred"><?php echo $price; ?></c></b><br>
				<br> <br> <input type="hidden" name="name"
					value="<?php echo $name; ?>"> <input type="hidden" name="category"
					value="<?php echo $category; ?>"> <input type="hidden" name="price"
					value="<?php echo $price; ?>">
				<button type="submit" class="btn btn-info" name="buy"
					style="margin-left: 350px; border-radius: 12px; background-color: black; color: gold; width: 10%">Add
					To Buy</button>
			</div>
		</form>
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