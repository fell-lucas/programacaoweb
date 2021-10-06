<?php
include '../utils/Functions.php';

if (isset($_POST['nameRecipe']) && isset($_POST['descr'])) {
  session_start();
  include '../utils/Connection.php';
  $nameRecipe = $_POST['nameRecipe'];
  $descr = $_POST['descr'];
  $prepare = 'default';
  $general_informations = 'default';
  $ingredients = 'default';
  $userId = $_SESSION['userId'];
  $sql = "INSERT INTO recipes (nameRecipe, descr, prepare_mode, general_informations, ingredients, access, user) VALUES ('$nameRecipe', '$descr', '$prepare', '$general_informations', '$ingredients', 0, $userId)";
  $query = $conn->prepare($sql);
  if($query->execute()) {
    redirect('listReceitas', 'Sucesso!:~:Receita cadastrada com sucesso.:~:success');
  } else {
    redirect('newReceita', 'Erro ao cadastrar.:~:Um erro desconhecido aconteceu.:~:error');
  }
} else{
  redirect('newReceita', 'Erro ao cadastrar.:~:Preencha os campos.:~:error');
}