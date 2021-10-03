<!DOCTYPE html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>

  <div class="wrapper">
    <h4>Crie uma nova conta</h4>

    <div class="container">
      <form action="./php/controller/SignupController.php" method="POST">
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"
              id="email" aria-describedby="helpId"
              placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="password">Senha</label>
            <input type="text" class="form-control" name="password"
              id="password" aria-describedby="helpId" placeholder="Senha">
          </div>
          <div class="col-sm-6">
            <label for="cpassword">Repita a senha</label>
            <input type="password" class="form-control" name="cpassword"
              id="cpassword" aria-describedby="helpId"
              placeholder="Repita a senha">
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
      <div class="form-group row col-md-12">
        <a href="./login.php">Já tem cadastro?</a>
      </div>
    </div>

  </div>
</body>
</html>

<?php include('components/js.php');