<?php
$username = "root";
$password = "admin";

try {
  $conn = new PDO("mysql:host=db;dbname=web", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
