<?php
include '../utils/Functions.php';

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
  include '../utils/Connection.php';
  $email = $_POST['email'];
  $pw = $_POST['password'];
  $cpw = $_POST['cpassword'];
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql)->fetch();
  if ($result == false) {
    if($pw == $cpw) {
      $sql = "INSERT INTO users (email, password) VALUES ('$email', '".password_hash($pw, PASSWORD_DEFAULT)."')";
      $query = $conn->prepare($sql);
      if($query->execute()) {
        redirect('index', 'Sucesso!:~:Cadastrado com sucesso. Por favor, efetue o login.:~:success');
      }
    } else {
      redirect('cadastro', 'Erro ao cadastrar.:~:As senhas não são iguais.:~:error');
    }
  } else {
    redirect('cadastro', 'Erro ao cadastrar.:~:Este email já está em uso.:~:error');
  }
}
