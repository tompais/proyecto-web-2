<!-- Header -->

<header class="header trans_300">

    <!-- Top Navigation -->

    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">Bienvenidos Usuarios a ShopLine</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">

                            <!-- Barra con Inicico de Sesion -->

                            <li class="account w-25">
                                <a href="#">
                                    Mi Cuenta <i class="ml-1 fa fa-angle-down"></i>
                                </a>
                                <ul class="account_selection">
                                    <li><a href="../../Views/Seguridad/login.php"><i class="fas fa-sign-in-alt mr-1"></i>Iniciar Sesion</a></li>
                                    <li><a href="../../Views/Seguridad/registrar.php"><i class="fas fa-sign-out-alt mr-1"></i>Registrarse</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Barra de navegacion -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <img class="img-fluid" src="../../wwwroot/img/Home/logo.png">
                    </div>
                    <nav class="navbar">

                        <form class='navbar-form mt-1'>
                            <div class='input-group'>
                                <input class='form-control' type='text' name='search' placeholder='Buscar' />

                                <span class="input-group-btn">
                                          <button type='submit' class='btn btn-default'>
                                            <i class="fas fa-search"></i>
                                          </button>
                                    </span>
                            </div>
                        </form>

                        <ul class="navbar_menu">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Productos</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>

                        <ul class="navbar_user">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Menu en Hamburguesa -->

<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
        <ul class="menu_top_nav">
            <li class="menu_item has-children">
                <a href="#">
                    Mi Cuenta
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="menu_selection">
                    <li><a href="../../Views/Seguridad/login.php"><i class="fa fa-sign-in mr-1" aria-hidden="true"></i>Iniciar Sesion</a></li>
                    <li><a href="../../Views/Seguridad/registrar.php"><i class="fa fa-user-plus mr-1" aria-hidden="true"></i>Registrarse</a></li>
                </ul>
            </li>
            <li class="menu_item"><a href="#">Inicio</a></li>
            <li class="menu_item"><a href="#">Categorias</a></li>
            <li class="menu_item"><a href="#">Productos</a></li>
            <li class="menu_item"><a href="#">Contacto</a></li>
        </ul>
    </div>
</div>