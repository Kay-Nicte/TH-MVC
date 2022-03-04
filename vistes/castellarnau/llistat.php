<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      color: whitesmoke;
    }

    #frases {
      text-decoration: none;
      color: white;
      font-size: 20px;
    }

    .page-link {
      color: #333;
    }


    .container {
      padding-top: 10%;
    }

    .botonesAvance {
      margin-left: 32%;
      position: fixed;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="textoHistoria" style="text-align: center; background-color: #3337; margin-top: 15%;">
      <?php
      foreach ($res as $fragmentos) {

        echo "<br><br><a id='frases' href='index.php?control=ControlCastellarnau&operacio=getFrase&codi=" . $fragmentos['ID'] . "'>" . $fragmentos['frase'] . "</a><br><br></td></tr>";
      }

      if (isset($_SESSION['missatge'])) {
        echo $_SESSION['missatge'];
        unset($_SESSION['missatge']);
      }
      ?>

      <nav class="botonesAvance">
        <ul class="pagination">
          <?php
          $next = $numPagina + 1;
          $previous = $numPagina - 1;

          for ($i = 1; $i <= $total_pags; $i++) {
            // echo "<li class='page-item'><a class='page-link' href='index.php?control=ControlCastellarnau&operacio=llistat&page=" . $i . "' >" . $i . "</a></li>";
          }

          echo "<li class='page-item' id='botonPrevious'><a class='page-link' href='index.php?control=ControlCastellarnau&operacio=llistat&page=$previous'>Anterior</a></li>";
          echo "<li class='page-item' id='botonNext'><a class='page-link' href='index.php?control=ControlCastellarnau&operacio=llistat&page=$next'>Siguiente</a></li>";
          ?>

        </ul>
      </nav>
    </div>

  </div>


</body>

</html>