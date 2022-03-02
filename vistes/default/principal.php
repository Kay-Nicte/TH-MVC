<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Tarraco Heroínas</title>
</head>

<d>


    <!-- <div class="postit" style="  max-width: 100%;
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

    </div> -->

    <!-- Tarjetón de datos de usuario + historia actual + cerrar sesión -->

        <div class="card text-dark bg-warning mb-4" style="max-width: 16rem; max-height: 8rem; float: right;">
        
        <div class="card-body" style="text-align:center;">
                <b>Usuario:</b>
                <?php if (isset($_SESSION['username'])) {
                    print_r($_SESSION['username']);
                }
                ?>
           <br>
              <b>Historia:</b>  El Fantasma de la Casa Castellarnau
            
            <a class="nav-link" href="index.php?control=ControlLogin&operacio=logout">Cerrar Sesión</a>
        </div>
    </div>
    <!-- Fin de tarjetón de datos de usuario + historia actual + cerrar sesión -->


    <!-- El Carrusel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <center>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMG/castellarnau_carrusel.jpg" class="d-block w-25" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="IMG/santatecla_carrusel.jpg" class="d-block w-25" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="IMG/ardi_carrusel.jpg" class="d-block w-25" alt="...">
                </div>
            </div>
        </center>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Fin del Carrusel -->
    <br><br><br><br>
    <!-- Historias -->
    <h2>
        <center>Historias</center>
    </h2>
    <br>
    <div class="row" style="color: #333; margin-left: 20%;">
        <div class="col-sm-3">
            <div class="card" style="background: transparent!important;">
                <div class="card-body">
                    <h5 class="card-title">El Fantasma de la Casa Castellarnau</h5>
                    <p class="card-text">Los rumores hablan de que la casa está embrujada, y los gritos que provienen de la habitación prohibida no son de mucha ayuda... ¿Podrás rescatar al fantasma de la Casa Castellarnau?</p>
                    <a href="#" class="btn btn-dark">Jugar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="background: transparent!important;">
                <div class="card-body">
                    <h5 class="card-title">Santísima Tecla Romana</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolor delectus suscipit soluta temporibus, quod veritatis ducimus voluptate earum harum, molestias nisi assumenda rem maxime.
                    </p>
                    <a href="#" class="btn btn-dark">Jugar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="background: transparent!important;">
                <div class="card-body">
                    <h5 class="card-title">Ardi en la Prehistoria</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum voluptatem sit et ut, magnam nihil non quia numquam neque maxime rem, a quidem. Dolores perferendis vero similique aliquid nostrum.</p>
                    <a href="#" class="btn btn-dark">Jugar</a>
                </div>
            </div>
        </div>
    </div>


    </body>

</html>