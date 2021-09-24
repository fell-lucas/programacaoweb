<!doctype html>
<html lang="en">

<?php include 'header.php' ?>

<body>
  <nav class="navbar navbar-light justify-content-between">
    <div>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./index.php">
        Receitas Delit
      </a>
      <button type="button" id="btnRandomColors"
        class="btn btn-sm randomColorsGradient">Cores
        aleatórias!</button>
    </div>
    <div>
      <a class="log in" href="./login.php">
        Entrar
      </a>
      <span class="log"> / </span>
      <a class="log out" href="./cadastro.php">
        Cadastro
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./listReceitas.php">Lista de receitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./perfil.php">Seu perfil</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"
    data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <a href="./descricaoReceita.php">
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
        <a href="./descricaoReceita.php">
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
        <a href="./descricaoReceita.php">
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
      <div class="card-receita">
        <p>Abóbora assada</p>
        <span class="btn btn-sm btn-outline-primary"><a
            href="./descricaoReceita.php">Veja mais</a></span>
      </div>
      <div class="card-receita">
        <p>Bacalhau crocante</p>
        <span class="btn btn-sm btn-outline-primary"><a
            href="./descricaoReceita.php">Veja mais</a></span>
      </div>
      <div class="card-receita">
        <p>Fricassê de frango</p>
        <span class="btn btn-sm btn-outline-primary"><a
            href="./descricaoReceita.php">Veja mais</a></span>
      </div>
      <div class="card-receita">
        <p>Salmão folhado</p>
        <span class="btn btn-sm btn-outline-primary"><a
            href="./descricaoReceita.php">Veja mais</a></span>
      </div>
    </div>
    <div class="card">
      <h1>Sobre</h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <p>Um lugar onde pode-se encontrar variados tipos de receitas, todas
        descritas e com belas fotos para iinspira-lo a se aventurar na cozinha.
      </p>
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
