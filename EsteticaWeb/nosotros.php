<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Logo.jpg">
    <title>Rangel Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('Fondo/modelo8.1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php include "php/navbar.php"; ?>
    <br>
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
                    <img src="RuletaNosotros/imagen1.jpg" alt="Los Angeles" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="RuletaNosotros/imagen2.jpg" alt="Chicago" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="RuletaNosotros/imagen3.1.jpg" alt="New York" alt="500" width="500" class="text-center">
                </div>
                <div class="carousel-item">
                    <img src="RuletaNosotros/imagen4.jpg" alt="New York" alt="500" width="500" class="text-center">
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

        <article>
            <section id="seccion">
                <h1 style="color: rgb(0, 0, 0);">¡Te invitamos a conocernos!</h1>
                <h6 style="color: rgb(199, 199, 199);">En Rangel Style, llevamos más de 10 años ofreciendo servicios a tu medida y con la mayor calidad.<br> Desde un casual corte de cabello, hasta el peinado de tus sueños.<br> ¡Encuentra el look perfecto para ti!</h6><br>
        </article>
        </section>
        <h4><strong><p><a id="enlaces" style="color: rgb(23, 16, 27);" link href="citas.html" >Agenda tu cita</a></strong></p>
        </h4>

        <article>
            <div class="container">
                <h2>Información</h1>
                    <p><strong>contáctanos:
            (81) 8123-0599</strong></p>
                    <strong><a style="color: rgb(23, 16, 27);" href="https://www.facebook.com/Style-Rangel-105841035492120
Icon for this message
Style RangelBelleza, cosmética y cuidado personal">Síguenos en Facebook</a>
        </article></strong></div>
        </article>
        <h4><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.2877580113022!2d-100.34770928498044!3d25.694894883667093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295e0bfc54e65%3A0x21986572aeb85884!2sChihuahua%20%26%20Avenida%20Hermosillo%2C%20Mitras%20Centro%2C%2064460%20Monterrey%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1626316477692!5m2!1ses-419!2smx"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></h4>
    </iframe>
            </article>
            <footer id="pie"><strong> Derechos reservados &copy; 2022 </strong></footer>
    </body>

</html>