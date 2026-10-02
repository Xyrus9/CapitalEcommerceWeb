<html>
<head>
<title>Add Data</title>
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
    width: 500px;
    height: 650px;
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
		<form method="post" action="" enctype="multipart/form-data">
		<h1><b>Capital</b><i class="fa fa-codepen"></i></h1>
		<h2 style="color:darkred;">Add Data Form</h2>
			<input type="text" name="name" placeholder="Enter Item Name.." required /><br><br>
			<input type="text" name="category" placeholder="Enter Category of item.." required /><br><br>
			<input type="text" name="price" placeholder="Enter Price" required /><br><br>
			<c>Upload Photo HERE : </c><input type="file" name="image"><br><br><br>
			<input type="submit" name="submit" value="SUBMIT"><br><br>
			<li class="header1">
    		Click HERE to <c class="header2" style="background-color: white; color: black; font-size: 16px;"class="btn btn-outline-info">
            View Data</c>
    		<div class="header3">
            <a class="nav-link" href="viewuser.php"style="background-color: black; font-size: 20px;">View All User Information</a>
          	<a class="nav-link" href="viewdata.php"style="font-size: 20px;background-color: black;">View All Items</a>
          	<a class="nav-link" href="viewmessage.php"style="font-size: 20px;background-color: black;">View All Message</a>
            <a class="nav-link" href="vieworder.php"style="font-size: 20px;background-color: black;">View All Orders</a>
           	</div></li> 
		</form>
	</center>
		</div>
	</body>
</html>
<?php 
if(isset($_FILES['image'])){
    $errors = array();
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type']; /**images/png**/
    $fext = explode("/", $filetype);
    $file_ex = strtolower(end($fext));
    $extention = array("jpeg","jpg","png","gif");
    
    if (in_array($file_ex, $extention)==FALSE) {
        $errors[] = "please upload valid file type";
    }
    else if ($filesize > 2097152){
        $errors[] = "file size is too big";
    }
    else if(empty($errors)==TRUE){
        move_uploaded_file($filetmp, "images/".$filename);
        echo "<script>
                    alert('Data Added!');
                    window.location.href='add.php';
                </script>";
    }
    else echo $errors;
}
else return FALSE;

try {
    include 'connection.php';
    
    $sql="INSERT INTO item(name, category, price, photo) VALUES(?,?,?,?)";
    $sq= $db->prepare($sql);
    
    $name= $_POST['name'];
    $category= $_POST['category'];
    $price= $_POST['price'];
    $photo= $filename;
    
    if($sq->execute(array($name,$category,$price,$photo))){
        
    }
    else echo "FAILED";
} catch (PDOException $e) {
    echo $e->getMessage();
}
$db=null;

?>