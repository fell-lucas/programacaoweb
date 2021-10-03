<?php
include('php/utils/Functions.php');
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
  redirect('index', 'Você já está logado.:~::~:info');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'components/header.php' ?>

<body>
  <div class="wrapper">
    <h4>Bem-vindo de volta!</h4>
    <div class="container">
      <form method="post" action="./php/controller/LoginController.php">
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="e-mail">E-mail</label>
            <input required type="email" class="form-control" name="email"
              id="email" aria-describedby="helpId" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="password">Senha</label>
            <input required type="password" class="form-control" name="password"
              id="password" aria-describedby="helpId" placeholder="Senha">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <button type="reset"
              class="btn btn-warning btn-block">Limpar</button>
          </div>
          <div class="col-sm-6">
            <button type="submit"
              class="btn btn-success btn-block">Enviar</button>
          </div>
        </div>
      </form>
      <div class="form-group row col-sm-12">
        <a href="#">Esqueceu a senha?</a>
      </div>
      <div class="form-group row col-sm-12">
        <a href="./cadastro.php">Ainda não tem cadastro?</a>
      </div>
    </div>
  </div>
</body>

</html>
<?php include('components/js.php') ?>
