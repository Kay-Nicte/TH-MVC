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


    <br><br><br><br><br><br><br>

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
  
    <div class="card border-dark bg-transparent mb-3" style="max-width: 20rem; position: absolute; margin-left: 8%;">
        <div class="card-header bg-dark;"><b>El Fantasma de la Casa Castellarnau</b></div>
        <div class="card-body text-dark">
            <p class="card-text">Los rumores hablan de que la casa está embrujada, y los gritos que provienen de la habitación prohibida no son de mucha ayuda... ¿Podrás rescatar al fantasma de la Casa Castellarnau?</p>
            <a href="index.php?control=ControlCastellarnau&operacio=llistat" class="btn btn-dark">Jugar</a>
        </div>
    </div>
    <div class="card border-dark bg-transparent mb-3" style="max-width: 20rem; position:absolute; margin-left: 38%;">
        <div class="card-header"><b>Santísima Tecla Romana</b></div>
        <div class="card-body text-dark">
            <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolor delectus suscipit soluta temporibus, quod veritatis ducimus voluptate earum harum, molestias nisi assumenda rem.
            </p>
            <a href="#" class="btn btn-dark disabled">Próximamente...</a>
        </div>
    </div>
    <div class="card border-dark bg-transparent mb-3" style="max-width: 20rem; position:absolute;margin-left: 68%;">
        <div class="card-header"><b>Ardi en la Prehistoria</b></div>
        <div class="card-body text-dark">
            <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolor delectus suscipit soluta temporibus, quod veritatis ducimus voluptate earum harum, molestias nisi assumenda rem.
            </p>
            <a href="#" class="btn btn-dark disabled">Próximamente...</a>
        </div>
    </div>

    </body>

</html>