<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Tarraco Heroínas</title>
</head>

<body>
  <center><div class="container">
    <div class="row" style="justify-content:center";>

      <form method="POST" action="index.php?control=ControlLogin&operacio=login">
        <h2> Iniciar sesión </h2>
        <br>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <a href="http://localhost/TH/index.php?control=ControlUsers&operacio=showformnew" id="registro">¿Es tu primera vez aquí? ¡Regístrate y vive la aventura! :)</a>

    </div>
    <br><br>

    </form>
  </div></center>


  <?php
  if (isset($_SESSION['missatge'])) {
    echo $_SESSION['missatge'];
    unset($_SESSION['missatge']);
  }
  ?>

  </div>
  </div>
</body>

</html>