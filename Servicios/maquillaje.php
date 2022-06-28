<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Logo.jpg">
    <title>Rangel Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./estilos.css">
    <style>
        body {
            background-image: url('../Fondo/modelo8.1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<?php include "../php/navbar.php"; ?>

<body class="text-center">
    <br></br>
    <h5><strong>Nuestros maquillistas son precisos y muy cuidadosos, el precio del maquillaje será 
  dependiendo de lo que el cliente quiera que se le realice una vez ya se haya decidido lo que se 
  hará y si el cliente lo pidió se le realizara la base y se comenzará a realizar contamos con muchos 
  tipos de maquillaje tales como maquillaje hipoalergénico, maquillaje orgánico y maquillaje aprueba de 
  agua también contamos con prostéticos para maquillaje profesional para monstruos algunos de estos son
   dientes falsos, heridas, cortes, cuernos y/o órganos del cuerpo como ojos, corazones, tripas, etc.…<p>
  Para el maquillaje con prostéticos tendrá un costo extra dependiendo del prostético que sea necesario. </p>
 </strong> </h5>

    <body>
        <div class="cambio">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="container p-6 my-8 border text-center">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./maquillajeprueba/maquillaje3.jpeg" alt="A" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./maquillajeprueba/maquillaje7.1.jpeg" alt="B" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./maquillajeprueba/maquillaje10.1.jpg" alt="C" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./maquillajeprueba/maquillaje6.2.jpeg" alt="C" alt="500" width="500" class="text-center">
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </body>

</html>