<?php
session_start();
include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buy Cart</title>
</head>
<style>
	body {
		background-color: lightsteelblue;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5"
				style="padding: 20px 20px">
				<h1
					style="background-color: black; font-size: 200%; font-style: initial; color: gold; font-family: Georgia, serif;">Shopping
					Cart To Buy</h1>
			</div>
			<!-- table -->

			<div class="col-lg-9" style="padding-bottom: 600px;">

				<table class="table">
					<thead class="text-center">

						<tr>
							<th scope="col"
								style="color: darkred; font-size: 20px; font-style: initial; font-family: Georgia, serif;">No.
							</th>
							<th scope="col"
								style="font-size: 20px; font-style: initial; font-family: Georgia, serif;">Item
								Name</th>
							<th scope="col"
								style="color: darkred; font-size: 20px; font-style: initial; font-family: Georgia, serif;">Item
								Price</th>
							<th scope="col"
								style="font-size: 20px; font-style: initial; font-family: Georgia, serif;">Quantity</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php
    $total = 0;
    $count=0;
    if (isset($_SESSION['cart'])) {
    	$count=count($_SESSION['cart']);
        foreach ($_SESSION['cart'] as $key => $value) {
            $total = $total + $value['price'] * $value['Quantity'];
            $key = $key + 1;
            echo "
					<tr>
					<td>$key</td>
					<td>$value[name]</td>
					<td>$value[price]</td>
					<td>$value[Quantity]</td>
					<form action='manage_cart.php' method='post'>
					<td><button class='btn btn-sm btn-outline-danger' name='remove'>REMOVE</button></td>
					<input type='hidden' name='name' value='$value[name]'>

					</form>
					</tr>
								";
        }
    }
    ?>


						
					</tbody>
				</table>

			</div>
			<div class="col-lg-3" >
				<div class="border bg-light rounded text-center p-4">
					<h4
						style="font-size: 200%; font-style: initial; color: black; font-family: Georgia, serif;">Total Price</h4>
					<h5>$<?php echo $total; ?></h5>
					<h4
						style="font-size: 150%; font-style: initial; color: darkred; font-family: Georgia, serif;">Total Items</h4>
					<h5 style="color: darkred;"><?php echo $count; ?></h5>
					<form>
						<a href="checkout.php"style="border-radius: 20px; margin: 20px 10px; background-color: gray; color: gold; font-size: 20px;"class="btn btn-outline-info">CHECKOUT</a>
					</form>
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