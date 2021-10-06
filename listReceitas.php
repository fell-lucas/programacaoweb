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
    $active = "lista";
  ?>
  <?php include 'components/navbar.php' ?>
  
  <?php 
    $recipeClass = new Recipe($conn);
    $listRecipes = $recipeClass->getAll();
  ?>
  <div>
  <?php 
  if(isset($_SESSION['user']))
    echo '
    <a href="./newReceita.php">
      <button type="submit" class="btn btn-success btn-block">Nova receita</button>
    </a>';
  else
    echo '';
  ?>
  </div>
  
  
  <?php
    if(empty($listRecipes)){
      echo "<div class='wrapper'>";
      echo "<h2>A lista de receitas está vazia.</h2>";
      if(isset($_SESSION['user'])){
        echo "<h3>Cadastre uma com o botão acima.</h3>";
      }
      echo "</div>";
    }else{
      echo "<div class='list-wrapper'>";
      foreach ($listRecipes as &$recipe) {
        echo "<div class='list-item'>
            <img width='180px' src='./images/receita1.jpeg' alt='cacetinho'>
            <div>
              <p>$recipe[nameRecipe]</p>
              <span>$recipe[descr]</span>
              <a href='./descricaoReceita.php?id=$recipe[id]'>Clique para ver mais</a>
            </div>
          </div>";
      }
      echo "</div>";
    }
  ?>

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
