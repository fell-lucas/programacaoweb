<?php
include 'php/utils/Functions.php';
session_start();
?>

<!doctype html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>
  <?php 
    $active = "lista";
  ?>
  <?php include 'components/navbar.php' ?>
  <div class="wrapper">
<h2>Cadastre a sua receita</h1>
  <div class="container">
  <form action="./php/controller/RecipeController.php" method="POST">
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="nameRecipe">Nome</label>
            <input type="nameRecipe" class="form-control" name="nameRecipe"
              id="nameRecipe" aria-describedby="helpId" required
              placeholder="Nome">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="descr">Descrição</label>
            <input type="descr" class="form-control" name="descr"
              id="descr" aria-describedby="helpId" required
              placeholder="Descrição">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <button type="reset"
              class="btn btn-primary btn-block">Limpar</button>
          </div>
          <div class="col-sm-6">
            <button type="submit"
              class="btn btn-success btn-block">Enviar</button>
          </div>
        </div>
      </form>
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
