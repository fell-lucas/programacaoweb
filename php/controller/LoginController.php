<?php
include '../utils/Functions.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
  include '../utils/Connection.php';
  $email = $_POST['email'];
  $pw = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql)->fetch();
  if ($result != false) {
    if (password_verify($pw, $result['password'])) {
      session_start();
      $_SESSION['user'] = $email;
      $_SESSION['userId'] = $result['id'];
      redirect('index', 'Sucesso!:~:Logado com sucesso.:~:success');
    } else {
      redirect('login', 'Erro ao logar.:~:Senha incorreta.:~:error');
    }
  } else {
    redirect('login', 'Erro ao logar.:~:Usuário não encontrado.:~:error');
  }
}
