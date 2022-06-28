<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="index.php">
            <img src="../Logo.jpg" style="width:150px" alt="Logo">
        </a>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav">
                <?php if(!isset($_SESSION["user_id"])):?>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Servicios</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Servicios/cortes.php">Cortes</a></li>
                        <li><a class="dropdown-item" href="/Servicios/maquillaje.php">Maquillajes</a></li>
                        <li><a class="dropdown-item" href="/Servicios/peinados.php">Peinados</a></li>
                        <li><a class="dropdown-item" href="/Servicios/depilacion.php">Depilación</a></li>
                        <li><a class="dropdown-item" href="/Servicios/manicuraYpedicura.php">Manicura y Pedicura</a></li>
                    </ul>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
                <?php else:?>
                <li class="nav-item">
                    <a class="nav-link text-white bg-danger" href="./php/logout.php">Cierrar sesión</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>