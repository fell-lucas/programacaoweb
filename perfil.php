<?php
include 'php/utils/Functions.php';
session_start();
?>

<!doctype html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>
  <?php 
    $active = "perfil";
  ?>
  <?php include 'components/navbar.php' ?>
  
  <div class="cards-wrapper">
    <div class="card">
      <h3 align="center"> Suas informações</h3>
      <div class="list-group">
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">E-mail</h5>
          </div>
          <p class="mb-1">fulano@bol.com</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Senha</h5>
          </div>
          <p class="mb-1">***********</p>
        </a>
      </div>
      
      <div class="carousel-caption justify-content-center align-items-center">
          <span class="btn btn-sm btn-outline-warning">Alterar senha</span>
          <span class="btn btn-sm btn-outline-danger">Excluir conta</span>
        </div>
    </div>
    <div class="card">
    <h3 align="center">Suas receitas</h3>
      <div class="list-group">
          <ol>
              <li><a href="#">Receita 2</a></li>
              <li><a href="#">Receita 3</a></li>
              <li><a href="#">Receita 5</a></li>
              <li><a href="#">Receita 1</a></li>
              <li><a href="#">Receita 4</a></li>
          </ol>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="./js/main.js"></script>
</body>

</html>
