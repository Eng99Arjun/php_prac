<?php
$servername = "localhost";
$username = "root";
$password = "1234";


try {
    $conn = new PDO("mysql:host=$servername;dbname=PDOConn", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed:  {$e->getMessage()}";
}

$conn->query("insert into customer (name) values('Dhananjay'); ");
$conn = null;

?>
