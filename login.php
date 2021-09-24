<!DOCTYPE html>
<html lang="en">

<?php include 'header.php' ?>

<body>

  <div class="wrapper">
    <h4>Bem-vindo de volta!</h4>
    <div class="container">
      <form method="post" action="./php/controller/LoginController.php">
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Senha">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <button type="reset" class="btn btn-warning btn-block">Limpar</button>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success btn-block">Enviar</button>
          </div>
        </div>
      </form>
      <div class="form-group row col-sm-12">
        <a href="#">Esqueceu a senha?</a>
      </div>
      <div class="form-group row col-sm-12">
        <a href="./cadastro.html">Ainda não tem cadastro?</a>
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>