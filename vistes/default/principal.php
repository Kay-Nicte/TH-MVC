<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->


    <title>Tarraco Heroínas</title>
</head>

<body>

    <div class="container">
        <div class="postit" style="  max-width: 100%;
    height: auto;
    width: 20%;
    margin-left: 90%;
    color: white;
    background: #333;
    border-radius: 10px; 
    cursor: pointer;
    display: inline-block;
    line-height: normal;
    padding: 9px 20px 2px 2px;
    text-align: right;
    text-decoration: none;
    text-shadow: 0 0 1px;
    transition: all .3s;
    vertical-align: middle;
    box-shadow: 0 1px 8px rgba(0, 0, 0, );">
            <span> Usuario:
                <?php if (isset($_SESSION['username'])) {
                    print_r($_SESSION['username']);
                }
                ?>
            </span><br>
            <span> Historia: Castellarnau </span><br>
            <a class="nav-link" href="index.php?control=ControlLogin&operacio=logout">Cerrar Sesión</a>

        </div>

    </div>
    <div class="cuerpo-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMG/castellarnau_carrusel.jpg" class="d-block w-100" alt="Casa Castelarnau">
                </div>
                <div class="carousel-item">
                    <img src="IMG/santatecla_carrusel.jpg" class="d-block w-100" alt="Santa Tecla">
                </div>
                <div class="carousel-item">
                    <img src="IMG/ardi_carrusel.jpg" class="d-block w-100" alt="Troglodita">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>
        <div class="ventanaContainer">
            <!-- <div class="sinopsisContainer" style="position: relative;">
                <h4>Santísima Tecla Romana</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque incidunt, odio possimus illo molestias rem? Recusandae aut esse impedit commodi, possimus, praesentium enim, inventore soluta magnam earum eaque ad itaque!</p>
            </div>
            <div class="sinopsisContainer" id="sinopsisCastellarnau" style="position: relative;">
                <h4> <a href="index.php?control=ControlCastellarnau&operacio=llistat" style="text-decoration:none; color:#333">El Fantasma de la Casa Castellarnau</a></h4>
                <p>Los rumores hablan de que la casa está embrujada, y los gritos que provienen de la habitación prohibida no son de mucha ayuda... ¿Podrás rescatar al fantasma de la Casa Castellarnau?</p>
            </div>
            <div class="sinopsisContainer" style="position: relative;">
                <h4>Ardi en la Prehistoria</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est in nemo voluptas nisi reiciendis accusamus quis saepe maiores corrupti dolorum, eligendi enim dignissimos odio eum sint obcaecati ipsa neque tempora.</p>
            </div> -->


            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>El Fantasma de la Casa Castellarnau</center>
                            </h5>
                            <p class="card-text">
                                <center>Los rumores hablan de que la casa está embrujada, y los gritos que provienen de la habitación prohibida no son de mucha ayuda... ¿Podrás rescatar al fantasma de la Casa Castellarnau?</center>
                            </p>
                            <a href="http://localhost/TH/index.php?control=ControlCastellarnau&operacio=llistat" class="btn btn-dark">Leer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>Ardi en la Prehistoria</center>
                            </h5>
                            <p class="card-text">
                                <center>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio optio nemo officia delectus, eveniet, odio quas quia iure ipsam consectetur accusamus dolorum non nobis dolorem.</center>
                            </p>
                            <a href="#" class="btn btn-dark">Leer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

</body>

</html>