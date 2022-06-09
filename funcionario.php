<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'header.php'; ?>
  <title>Tela dos funcionários</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <a class="navbar-brand" href="#"><img src="./PJ1.png" style="width:auto; height:3em;"></a>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 2em">BEM VINDO(A) FUNCIONÁRIO(A)</a>
        </li>
      </ul>

      <div class="d-flex">

        <a href="funcionario_login.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO LOGIN</button></a>

      </div>


    </div>

  </nav>

  <article>
    <header>
      <h1>Tela dos funcionários</h1>
    </header>
    <div class="login-cetralizado">
      <form style="text-align: center;">
        <label>NOME DO CLIENTE: </label>
        <input type="text" class="form-control">
        <button type="submit" class="btn btn-primary btn-submit">PESQUISAR</button>
      </form>

    </div>

  </article>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>