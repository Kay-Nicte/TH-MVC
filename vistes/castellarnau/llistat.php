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
  </style>
</head>

<body>
  <div class="container">

    <br><br><br>
    <?php

    foreach ($res as $fragmentos) {

      echo "<br><br>" . $fragmentos['frase'] . "<br><br></td>";

      echo "</tr>";
    }

    if (isset($_SESSION['missatge'])) {
      echo $_SESSION['missatge'];
      unset($_SESSION['missatge']);
    }

    ?>

    <nav>
      <ul class="pagination">
        <?php
        echo "<li class='page-item'><span class='page-link'>Previous</span></li>";
        for ($i = 1; $i <= $total_pags; $i++) {

          echo "<li class='page-item'><a class='page-link' href='index.php?control=ControlCastellarnau&operacio=llistat&page=" . $i . "' >" . $i . "</a></li>";
        
        }

        $next = $i + 1;

        echo " <li class='page-item'><a class='page-link' href='index.php?control=ControlCastellarnau&operacio=llistat&page=$next'>Next</a></li>";

        ?>

      </ul>
    </nav> 

  </div>

 
</body>
</html>