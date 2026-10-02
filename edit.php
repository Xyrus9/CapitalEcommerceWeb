<?php
include 'connection.php';
$eid = $_GET['eid'];

$sql=$db->prepare("SELECT * FROM item WHERE IID='$eid'");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);
$rephoto = "images/".$photo;
?>
<html>
<head>
<title>Edit Data</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.container {
    margin: 50px auto;
    width: 500px;
    height: 800px;
    padding-top: 50px;
	border-radius: 5px;
	background-color: Lightsteelblue;
	padding-bottom: 50px;	
}
.container input[type=text], select {
    width: 90%;
    padding: 12px 20px;
    margin: 10px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.container input[type=submit]{
    margin: 10px 10px;
    width: 50%;
    color: #fff;
    background: #55a1ff;
    border: 0;
    border-radius: 12px;
    cursor: pointer;
    outline: 0;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
</style>
	<body>
	<div class="container">
	<center>
		<form method="post" action="editprocess.php" enctype="multipart/form-data">
		<h1><b>Capital</b><i class="fa fa-codepen"></i></h1>
		<h2 style="color:darkred;">Update Data Form</h2>
			<input type="hidden" name="id" value="<?php echo $IID; ?>">
			<input type="text" name="name" placeholder="Enter Item Name to Update.." value="<?php echo $name; ?>"><br><br>
			<input type="text" name="category" placeholder="Enter Category to Update.." value="<?php echo $category; ?>"><br><br>
			<input type="text" name="price" placeholder="Enter Price.." value="<?php echo $price; ?>"><br><br>
			<img src="<?php echo $rephoto; ?>" width="150" height="150" >
			<input type="hidden" name="oldimage" value="<?php echo $photo; ?>"><br><br>
			Change Photo  : <input type="file" name="newimage"> <br><br>
			<input type="submit" name="submit" value="SUBMIT"><br>
			<a href="viewdata.php" style="background-color: white; color: black; font-size: 14px;"class="btn btn-outline-info">View Data</a>
		</form>
		</center>
		</div>
	</body>
</html>