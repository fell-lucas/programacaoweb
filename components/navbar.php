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
    <?php 
    if(isset($_SESSION['user']))
      echo '<a class="log out" href="./php/controller/LogoutController.php">
        Sair
      </a>';
    else
      echo '
      <a class="log in" href="./login.php">
        Entrar
      </a>
      <span class="log"> / </span>
      <a class="log out" href="./cadastro.php">
        Cadastro
      </a>
    ';
    ?>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($active=="home"): ?> active<?php endif;?>">
        <a class="nav-link" href="./index.php">Home</a>
      </li>
      <li class="nav-item <?php if ($active=="lista"): ?> active<?php endif;?>">
        <a class="nav-link" href="./listReceitas.php">Lista de
          receitas</a>
      </li>
      <li
        class="nav-item <?php if ($active=="perfil"): ?> active<?php endif;?>">
        <a class="nav-link" href="./perfil.php">Seu perfil</a>
      </li>
    </ul>
  </div>
</nav>
