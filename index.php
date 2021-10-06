<?php
include 'php/utils/Functions.php';
session_start();
include 'php/model/Recipe.php';
include 'php/utils/Connection.php';
?>

<!doctype html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>
  <?php
  $active = "home";
  ?>
  <?php include 'components/navbar.php' ?>
  <?php 
    $recipeClass = new Recipe($conn);
    $listRecipes = $recipeClass->getAllOrderByAccess();
  ?>
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"
    data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <a href="./listReceitas.php">
          <img srcset="images/receita1.jpg" alt="responsive image"
            class="d-block img-fluid">
          <div class="carousel-caption">
            <div>
              <h2>Polenta</h2>
              <p>Comida típica muito saborosa</p>
              <span class="btn btn-sm btn-outline-primary">Veja mais</span>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item">
        <a href="./listReceitas.php">
          <img srcset="images/receita2.jpg" alt="responsive image"
            class="d-block img-fluid">
          <div
            class="carousel-caption justify-content-center align-items-center">
            <div>
              <h2>Torta de maçã</h2>
              <p>Conheca esta receita muito famosa</p>
              <span class="btn btn-sm btn-outline-primary">Veja mais</span>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item">
        <a href="./listReceitas.php">
          <img srcset="images/receita3.jpg" alt="responsive image"
            class="d-block img-fluid">
          <div
            class="carousel-caption justify-content-center align-items-center">
            <div>
              <h2>Carne com vagem</h2>
              <p>Sonho em forma de comida.
              </p>
              <span class="btn btn-sm btn-outline-primary">Veja mais</span>
            </div>
          </div>
        </a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button"
      data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button"
      data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="cards-wrapper">
    <div class="card">
      <div class="card-receita" style="border: none;">
        <h1>Receitas Populares</h1>
        <a href="./listReceitas.php">Lista de receitas</a>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <?php
        if(empty($listRecipes)){
          echo "<div class='wrapper'>";
          echo "<h2>A lista de receitas está vazia.</h2>";
          echo "</div>";
        }else{
          foreach ($listRecipes as &$recipe) {
            echo "<div class='card-receita'>
            <p>$recipe[nameRecipe]</p>
            <span class='btn btn-sm btn-outline-primary'><a
                href='./descricaoReceita.php?id=$recipe[id]'>Veja mais</a></span>
          </div>";
          }
        }
      ?>
    </div>
    <div class="card">
      <h1>Sobre</h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <p>Um lugar onde pode-se encontrar variados tipos de receitas, todas
        descritas e com belas fotos para iinspira-lo a se aventurar na cozinha.
      </p>
    </div>
  </div>
</body>

</html>
<?php include('components/js.php') ?>
