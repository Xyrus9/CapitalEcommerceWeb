<?php
$dsn = "mysql:hostname=localhost;dbname=capitaldb";
$user = "root";
$pwd = "";
try {
    $db = new PDO($dsn,$user,$pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE User(
    UID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (UID),
    User varchar(200),
    Email varchar(200),
    Phone varchar(200),
    Address varchar(200),
    Password varchar(200))";
    $db->exec($sql);
    echo "table created successfully";
} catch (PDOException $e) {
    echo "error : ".$e->getMessage();
}
$db=null;
?>