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

<body>
    <br></br>
    <h5><strong>
    Las depilaciones con las que contamos son la depilación láser
     y depilación con será, antes de aplicar la será contamos con crema anestésica
      y con la depilación láser aseguramos que el vello capilar crecerá con menor grosor 
      además también contamos con tatuado de cejas  con una garantía de duración de mínimo 
      un año para uno de estos tratamiento de depilación se deberá hacer una cita con 
      2 semanas de anticipación.<p>
        Podrá notar algunos de nuestros servicios en las siguientes imágenes para más 
        información favor de contactarse por medio de nuestro Facebook oficial o nuestro numero de teléfono.
      </p>
   </strong> </h5>
    <br></br>
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
                    <img src="./depilacionprueba/depilacion1.2.jpg" alt="A" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./depilacionprueba/depilacion2.2.jpg" alt="B" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./depilacionprueba/depilacion3.2.jpg" alt="C" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./depilacionprueba/depilacion4.2.jpg" alt="C" alt="500" width="500" class="text-center">
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
</body>

</html>