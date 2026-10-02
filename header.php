<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

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
    z-index: 10;
}
.header {
    padding-bottom: 100px;
}
</style>
<body>
<div class="header">
<nav class="navbar navbar-expand-lg navbar-red fixed-top navbar-dark">
    <div class="wrapper"> </div>
    <div class="container-fluid all-show"> <a class="navbar-brand" href="viewproducts.php" style="font-size: 200%; font-style: initial;color: gold; font-family: Georgia, serif;">CAPITAL <i class="fa fa-codepen"></i></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0" style="margin:0;">
            <li class="nav-item"><a class="nav-link" href="home.php"style="font-size: 20px;margin-left: 20px;">Home</a></li>
          	<li class="nav-item"><a class="nav-link" href="promotion.php"style="font-size: 20px;margin-left: 60px;">Promotion</a></li>
          	<li class="nav-item"><a class="nav-link" href="viewproducts.php"style="font-size: 20px;margin-left: 60px;">Products</a></li>
          	<li class="nav-item"><a class="nav-link" href="contactus.php"style="font-size: 20px;margin-left: 60px;">Contact Us</a></li>
          	<li class="nav-item"><a class="nav-link" href="aboutus.php"style="font-size: 20px;margin-left: 60px;">About Us</a></li>
            </ul>
           
    	 <?php
        	$count=0;
        	if (isset($_SESSION['cart'])) {
        		$count=count($_SESSION['cart']);
        	}
        ?>
        <a href="mycart.php"><i class="fa fa-shopping-cart" style="margin:0;color: silver;font-size:25px">My Cart[<?php echo $count; ?>]</i></a>
    </div>
    </div>
</nav>
</div>
</body>
</html>