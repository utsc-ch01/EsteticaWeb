<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../Logo.jpg">
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <?php include "php/navbar.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Bienvenido</h2>
                    <br>
                </div>
                <form>
                    <h4>Por favor, seleccione el servicio de su preferencia</h4>
                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="">
                    <label class="form-check-label" for="check1">Corte</label>
                    <br>
                    <input class="form-check-input" type="checkbox" id="check2" name="option2" value="">
                    <label class="form-check-label" for="check2">Maquillaje</label>
                    <br>
                    <input class="form-check-input" type="checkbox" id="check3" name="option3" value="">
                    <label class="form-check-label" for="check3">Peinado</label>
                    <br>
                    <input class="form-check-input" type="checkbox" id="check4" name="option4" value="">
                    <label class="form-check-label" for="check4">Depilación</label>
                    <br>
                    <input class="form-check-input" type="checkbox" id="check5" name="option5" value="">
                    <label class="form-check-label" for="check5">Manicura y Pedicura</label>
                    <br>
                    <label for="horario">Seleccione el horario:</label>
                    <input type="number" id="horario" name="horario" min="7" max="19">
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Hacer cita">
                </form>
            </div>
        </div>
    </body>

    </html>