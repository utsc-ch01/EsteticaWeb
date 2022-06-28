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
    <h5><strong>
  Los peinados que se realizan tienen los mejores productos para el cuidado 
  del cabello y peinados los cuales no se incluyen los cortes de ningún tipo 
  poseemos una amplia variedad de productos conocidos y productos de origen natural 
  nuestros procesos de cuidado aseguran restaurar cabello dañado y ofrecemos productos 
  para cuero cabelludo sensible, también orecemos tratamientos de alaciado permanente con
   garantía de duración de un año además de esto también tenemos tratamiento de decoloración 
   y una variedad de tintes de fantasía, si se desean realizar mescal de color estos 
   tendrán un costo mayor dependiendo de su dificultad.
</strong> </h5>
    <br></br>

    <body>

        <body>
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
                            <img src="./peinadosprueba/peinado1.jpg" alt="A" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./peinadosprueba/peinado2.jpg" alt="B" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./peinadosprueba/peinado3.jpg" alt="C" alt="500" width="500" class="text-center">
                        </div>
                        <div class="carousel-item">
                            <img src="./peinadosprueba/peinado4.jpg" alt="C" alt="500" width="500" class="text-center">
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