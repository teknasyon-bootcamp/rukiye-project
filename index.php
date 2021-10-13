<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=localhost;dbname=technews","root","");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
?>