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
    <h5><strong>Se tomarán medidas de las facciones faciales y del tipo de peinado en base a esto de dará una lista de peinados que más le convenga al cliente dicha 
    lista solo será opcional el cliente puede decidir que estilo prefiere los productos usados son de calidad y de renombre.
    Se realizan cortes de estética y de barberia el estilo no afectara el precio amenos de que el corte sea muy elaborado cortes de cabello como el degrafilado, 
    asimetrico, blunt bob, mullet, undercut, Corte fade, comb over, mohicano, etc… son cortes que por si mismos no son ni caros ni elaborados pero si a petición del cliente 
    quiere más modificaciones esto ya le generara un gasto adicional.
    A continuación pueden verse algunos de los cortes que nuestros estilistas han echo como muestra de nuestra habilidad y calidad.
    </strong> </h5>
</body>
<br></br>

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
                    <img src="./cortesprueba/peinado1.jpg" alt="A" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./cortesprueba/peinado2.jpg" alt="B" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./cortesprueba/peinado3.jpg" alt="C" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="./cortesprueba/peinado5.jpg" alt="C" alt="500" width="500" class="text-center">
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

    <body>

        <body class="text-center">
            <br></br>
            <h5><strong>En caso de que no se pueda presentar a la cita o llegue a faltar por falta 
    de tiempo favor de reagendar en ese mismo instante en nuestra sucursal de ser posible.
  </strong></h5>
        </body>

</html>