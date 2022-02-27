<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="../CSS/estilo.css" TYPE="text/css" MEDIA=screen>
    <title>Tarraco Heroínas</title>
</head>

<body>

     <div class="container">
        <div class="row">   
            <span> Usuario: 
            <?php if (isset($_SESSION['username'])) { 
            print_r($_SESSION['username']);
            }
            ?>
        
        </span><br><br>
            <span> Historia: Castellarnau </span><br><br>
            <a class="nav-link" href="index.php?control=ControlLogin&operacio=logout">Cerrar Sesión</a> 
      
      </div>


        <div class="cuerpo-container">
            <div class="row">
                <div class="ventana" id="alejandria"><a href="index.php?control=ControlCastellarnau">Alejandría</a></div>
                <div class="ventana" id=historiaActual><a href=#>Historia actual</a></div>
                <div class="ventana" id="historiaCompleta"><a href="#">Leer Historia Completa</a></div>
            </div>
            <div class="ventanaContainer">
                <div class="cuento">
                    <h4>Capítulo 1: Recién llegada</h4>
                    <p><i>Tarragona, julio de 1793…</i></p>

                    <p> Vista desde fuera, la casa no me gusta ni lo más mínimo. “¡Qué calle tan estrecha y qué casa tan escondida!” pienso, plantada en el empedrado frente a ella. Pero la verdad es que, al traspasar el enorme portón, no tardo ni dos minutos
                        en cambiar de idea. Por dentro es realmente espectacular. </p>

                    <p>Aunque es el mes de Julio, las escaleras de mármol(*) y las paredes de piedra hacen que un escalofrío me recorra de arriba a abajo la espina dorsal.</p>

                    <p>Avanzo hacia el interior de la casa con paso cauteloso, consciente de que el hecho de que el portón se encontrara entreabierto no es excusa para que cualquiera se cuele como Pedro por su casa. Camino lentamente con mis alpargatas de
                        esparto, esperando encontrarme a alguien a quien poder presentarme y entregar mi carta de recomendación.</p>

                    <p> *¡¡GGGRRRRRAAAAAAAAAAAAAHHHHHH!!* </p>

                    <p>Doy respingo, y puedo notar cómo se me para el corazón cuando, un segundo después del alarido, siento una mano apoyarse en mi hombro derecho.</p>

                    <p><b>(!) Atención: Esta decisión cambiará la historia.</b></p>

                    <p>a) Huyo de la casa a toda velocidad. Corro sin mirar atrás. Sea lo que sea lo que esté pasando aquí, no quiero saberlo.</p>

                    <p>b) No soy capaz de moverme. El miedo me deja paralizada. Siento cómo la sangre abandona mi rostro, y me quedo helada.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>