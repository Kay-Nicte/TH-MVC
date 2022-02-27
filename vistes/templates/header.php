<!doctype html>
<html lang="en">

<head>
  <title>Tarraco Heroínas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tarraco Heroínas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <?php if (isset($_SESSION['username'])) { ?>

             <li class="nav-item">
              <a class="nav-link" href="index.php?control=ControlCastellarnau">Alejandría</a>
            </li>

             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/TH/index.php?control=ControlCastellarnau&operacio=llistat">Historia Actual</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="index.php?control=ControlLogin&operacio=logout">Logout</a>
            </li>

          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?control=ControlLogin">Login</a>
            </li>
          <?php } ?>


        </ul>

      </div>
  </nav>