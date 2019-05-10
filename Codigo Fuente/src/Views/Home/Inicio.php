<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShopLine</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\wwwroot\lib\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\daterangepicker\daterangepicker.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\alertifyjs\css\alertify.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\OwlCarousel2-2.2.1\owl.carousel.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\OwlCarousel2-2.2.1\owl.theme.default.css">
    <link rel="stylesheet" href="..\..\wwwroot\lib\OwlCarousel2-2.2.1\animate.css">
    <link rel="stylesheet" href="..\..\wwwroot\css\Home\Inicio.css">
    <link rel="stylesheet" href="..\..\wwwroot\css\Home\responsive.css">
    <link rel="shortcut icon" href="..\..\wwwroot\img\favicon.ico" type="image/x-icon">
    <link rel="icon" href="..\..\wwwroot\img\favicon.ico" type="image/x-icon">
</head>

<body>

<div class="super_container">

    <?php

        require_once "../Shared/Header.php"

    ?>

    <!-- Slider -->

    <div class="main_slider" style="background-image:url(../../wwwroot/img/Home/bannerAlt.jpg)">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>Encuentra todos los productos</h6>
                        <h1>Aqui en ShopLine</h1>
                        <div class="red_button shop_now_button mt-5 "><a href="#">Encontrar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner de productos -->

    <div class="banner mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Categorias mas populares</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 border">
                    <div class="banner_item align-items-center" style="background-image:url(../../wwwroot/img/Home/tecnologia.jpg)">
                        <div class="banner_category">
                            <a href="#">Tecnologias</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border">
                    <div class="banner_item align-items-center" style="background-image:url(../../wwwroot/img/Home/calzado.jpg)">
                        <div class="banner_category">
                            <a href="#">Calzados</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border">
                    <div class="banner_item align-items-center" style="background-image:url(../../wwwroot/img/Home/indumentaria.png)">
                        <div class="banner_category">
                            <a href="#">Indumentarias</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mas vendiditos -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Productos mas Vendidos</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="owl-carousel owl-theme product_slider">
                        <!-- Producto 1 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-item">
                                <div class="product discount">
                                    <div class="product_image">
                                        <img src="../../wwwroot/img/Home/product_1.png" alt="">
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Buzo Bordo con capucha</a></h6>
                                        <div class="product_price">$520.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 2 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-item women">
                                <div class="product">
                                    <div class="product_image">
                                        <img src="../../wwwroot/img/Home/product_2.png" alt="">
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Samsung S8 Plus</a></h6>
                                        <div class="product_price">$50000.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 3 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-item women">
                                <div class="product">
                                    <div class="product_image">
                                        <img src="../../wwwroot/img/Home/product_3.png" alt="">
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Nike Airmax 97</a></h6>
                                        <div class="product_price">$2500.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 4 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-item accessories">
                                <div class="product">
                                    <div class="product_image">
                                        <img src="../../wwwroot/img/Home/product_4.png" alt="">
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Moto G5 Plus</a></h6>
                                        <div class="product_price">$6000.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 5 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-item women men">
                                <div class="product">
                                    <div class="product_image">
                                        <img src="../../wwwroot/img/Home/product_5.png" alt="">
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Puma Active 600</a></h6>
                                        <div class="product_price">$1000.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Caracteristicas -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-2x  fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Envio Gratis</h6>
                            <p>Puede ser alterado por el producto</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="far fa-2x fa-money-bill-alt"></i></div>
                        <div class="benefit_content">
                            <h6>Metodos de pago</h6>
                            <p>Efectivo, Credito y Debito</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-2x fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Regreso en 45 dias</h6>
                            <p>Asegurarnos la calidad de tu producto</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fas fa-2x fa-user-clock"></i></div>
                        <div class="benefit_content">
                            <h6>Atencion al Cliente</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Neovedades -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Novedades</h4>
                        <p>Subcribete para obtener todad nuestras novedades</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="post">
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="pupe893@gmail.com" required="required" data-error="Valid email is required.">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subcribite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav_container">
                        <div class="cr">©2019 Todos los derechos reservados al Proyecto de Web 2</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>


<script src="..\..\wwwroot\lib\jquery\jquery-3.4.0.min.js"></script>
<script src="..\..\wwwroot\lib\bootstrap\js\bootstrap.min.js"></script>
<script src="..\..\wwwroot\lib\fontawesome\js\all.min.js"></script>
<script src="..\..\wwwroot\lib\popper\popper.min.js"></script>
<script src="..\..\wwwroot\lib\tooltip\tooltip.min.js"></script>
<script src="..\..\wwwroot\lib\moment\moment-with-locales.min.js"></script>
<script src="..\..\wwwroot\lib\JQuery-Mask-Plugin\dist\jquery.mask.min.js"></script>
<script src="..\..\wwwroot\lib\daterangepicker\daterangepicker.js"></script>
<script src="..\..\wwwroot\lib\alertifyjs\alertify.min.js"></script>
<script src="..\..\wwwroot\lib\Isotope\isotope.pkgd.min.js"></script>
<script src="..\..\wwwroot\lib\OwlCarousel2-2.2.1\owl.carousel.js"></script>
<script src="..\..\wwwroot\lib\easing\easing.js"></script>
<script src="..\..\wwwroot\js\Home\Home.js"></script>

</body>

</html>
