<!DOCTYPE html>
<html lang="en">

<?php include 'components/header.php' ?>

<body>

  <div class="wrapper">
    <h4>Crie uma nova conta</h4>

    <div class="container">
      <form action="./index.php">
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="username">Usuário</label>
            <input type="text" class="form-control" name="username"
              id="username" aria-describedby="helpId"
              placeholder="Nome de usuário">
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>
