<!doctype html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>
  <?php 
    $active = "lista";
  ?>
  <?php include 'components/navbar.php' ?>

  <div class="cards-wrapper">
    <div class="card">
      <img width="100%" src="./images/receita1.jpeg" alt="cacetinho">
    </div>
    <div class="card">
      <h1>Cacetinho no Balaio</h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h3>Ingredientes</h3>
      <div class="list-group">
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Farinha de trigo</h5>
          </div>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Azeite</h5>
          </div>
          <p class="mb-1">15 colheres</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Fermento biológico</h5>
          </div>
          <p class="mb-1">3 sachês</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Água</h5>
          </div>
          <p class="mb-1">3 copos</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Sal</h5>
          </div>
          <p class="mb-1">1 colher de sopa</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Açúcar</h5>
          </div>
          <p class="mb-1">2 colheres de sopa</p>
        </a>
      </div>
    </div>
    <div class="card">
      <h1>Cacetinho no Balaio</h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h3>Modo de Preparo</h3>
      <div class="list-group">
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Misture todos os
              ingredientes, mexa bem e vá acrescentando a farinha de trigo até a
              massa soltar das mãos.
            </h5>
          </div>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Amasse a massa e deixa
              descansar por uns 20 minutos</h5>
          </div>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Após modele a massa do seu
              jeito e asse em forno de 200ºC em 45 minutos</h5>
          </div>
        </a>
      </div>
    </div>
    <div class="card">
      <h1>Cacetinho no Balaio</h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h3>Informações Gerais</h3>
      <div class="list-group">
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Rendimento</h5>
          </div>
          <p class="mb-1">30 pães</p>
        </a>
        <a
          class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 style="color: #d3d39e;" class="mb-1">Preparo</h5>
          </div>
          <p class="mb-1">60 minutos</p>
        </a>
      </div>
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
