<?php
$dsn = "mysql:hostname=localhost;dbname=capital";
$user = "root";
$pwd = "";

try {
    $db = new PDO($dsn,$user,$pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    $e->getMessage();
}

?>
