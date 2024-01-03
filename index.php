<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Games</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Jogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Lista de Jogos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
          <?php
          //conexão com o banco de dados
            include("config.php");

            // includes das paginas
            switch(@$_REQUEST["page"]){
              case "novo":
                include("novo-jogo.php");
              break;
              case "listar":
                include("listar-jogos.php");
              break;
              case "salvar":
                include("salvar-jogo.php");
              break;
              case "editar":
                include("editar-jogo.php");
              break;
              default:
                print "<h1>Bem Vindos!!!</h1>";
            }
          ?>
      </div>
    </div>
  </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>