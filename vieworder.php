<html>
<head>
<title>User Message</title>
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
.header1 c{
    padding: 7px 7px;
    border-radius: 5px;
}
li.header1 
{
  display: inline-block;
}

.header3
{
  display: none;
  position: absolute;
  background-color: none;
}

.header3 a 
{
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.header3 a:hover {background-color: white;}

.header1:hover 

.header3{ display: block;}
.container {
	margin: 50px auto;
    padding-top: 50px;
	border-radius: 5px;
	background-color: Lightsteelblue;
	padding-bottom: 50px;		
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
include 'connection.php';
$sql=$db->prepare("SELECT * FROM checkout");
$sql->execute();
?>
<nav>
<div class="container">
<body>
<h1><b>Capital</b><i class="fa fa-codepen"></i></h1><br>
		<center><h2 style="color:darkred;">All Order Lists Form</h2></center>
		<br><br>
<table> 
	<th>OrderID</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Full Address</th>
	<th>Total Items</th>
	<th>Total Price</th>
	<th>Payment Method</th>

<?php 
while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    
?>

	<tr>
		<td><?php echo $ID; ?></td>
		<td><?php echo $firstname; ?></td>
		<td><?php echo $lastname; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $phone; ?></td>
		<td><?php echo $address; ?></td>
		<td><?php echo $totalitems; ?></td>
		<td>$<?php echo $totalprice; ?></td>
		<td><?php echo $payment; ?></td>
	</tr>
<?php 
}
?>
</table><br><br>
Click HERE to (Go Add Items Form):<a href="add.php"style="background-color: white; color: black; font-size: 16px;"class="btn btn-outline-info">Add Item</a><br><br>
<li class="header1">
    		Click HERE to <c class="header2" style="background-color: white; color: black; font-size: 16px;"class="btn btn-outline-info">View Data</c>
    		<div class="header3">
            <a class="nav-link" href="viewuser.php"style="background-color: black; font-size: 20px;">View All User Information</a>
          	<a class="nav-link" href="viewdata.php"style="font-size: 20px;background-color: black;">View All Items</a>
          	<a class="nav-link" href="viewmessage.php"style="font-size: 20px;background-color: black;">View All Message</a>
          	<a class="nav-link" href="vieworder.php"style="font-size: 20px;background-color: black;">View All Orders</a>
           	</div></li> 
</body>
</div>
</nav>
</html>