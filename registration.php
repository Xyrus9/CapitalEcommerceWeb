<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, phone, address, create_datetime)
                     VALUES ('$username', '$password', '$email', '$phone', '$address', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<script>
                    alert('You are registered Successfully!!');
                    window.location.href='login.php';
                </script>";
        } else {
            echo "<script>
                    alert('Required Fields are missing!!');
                    window.location.href='registration.php';
                </script>";
        }
    } else {
?>
    <form class="form" action="" method="post">
    <h1 class="login-title" style="color:darkred;">Capital<i class="fa fa-codepen"></i></h1>
		<h2 class="login-title">Registration</h2>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="phone" placeholder="Phone Number">
        <input type="text" class="login-input" name="address" placeholder="Address">
        <input type="password" class="login-input" name="password" placeholder="Password" autocomplete="off">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Login Here</a></p>
    </form>
<?php
    }
?>
</body>
</html>