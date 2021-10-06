<?php
include 'php/utils/Functions.php';
include 'php/model/Recipe.php';
include 'php/utils/Connection.php';
session_start();
!isset($_SESSION['user']) ? redirect('index', 'Erro!:~:Você não está logado.:~:error') : '';
$recipeClass = new Recipe($conn);
$listRecipes = $recipeClass->getAllByUserId($_SESSION['userId']);
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
          <p class="mb-1"><?php echo $_SESSION['user'] ?></p>
        </a>
      </div>
    </div>
    <div class="card">
    <h3 align="center">Suas receitas</h3>
    <?php 
    if(empty($listRecipes)){
      echo "<div class='wrapper'>";
      echo "<h2>Você não cadastrou nenhuma receita.</h2>";
      echo "</div>";
    }else{
      echo '<div class="list-group"><ol>';
      foreach ($listRecipes as &$recipe) {
        echo '<li><a href="./descricaoReceita.php?id='.$recipe['id'].'">'.$recipe['nameRecipe'].'</a>&nbsp;&nbsp;&nbsp;<span>Total de acessos: '.$recipe['access'].'</span></li>';
      }
      echo '</ol></div>';
    }
    ?>
      
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
