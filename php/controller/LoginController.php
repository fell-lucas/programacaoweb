<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
  include '../utils/Connection.php';
  $email = $_POST['email'];
  $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pw')";
  if ($conn->query($sql)->execute() === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $conn->error;
  }
}
