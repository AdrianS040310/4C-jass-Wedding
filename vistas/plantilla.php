<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="html/assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="html/assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="html/assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="html/assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="html/assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="html/assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="html/assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="html/assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="html/assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="html/assets/css/main.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .wow {
            color: #fff;
        }
    </style>
</head>

<body>
    <!--==== Header Section Here ======= -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="index.php?pagina=home" class="logo">
                        <h5 class="wow fadeInUp" data-wow-duration="2s">WEDDING_JASS</h5>
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">

                    <?php if (isset($_GET["pagina"])) : ?>

                        <?php if ($_GET["pagina"] == "gallery") : ?>

                            <li>
                                <a class="active" href="#">Options <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=signIn">
                                            <span>
                                                <i class="fas fa-user-plus"></i>
                                                <span class="mx-2">Sign up</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=login">
                                            <span>
                                                <i class="fa-solid fa-right-to-bracket"></i>
                                                <span class="mx-2">Sign in</span>
                                            </span>
                                        </a>

                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=viewLogs">
                                            <span>
                                                <i class="fa-solid fa-users"></i>
                                                <span class="mx-2">
                                                    View Logs
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=home">
                                            <span class="exit-link">
                                                <i class="fa-solid fa-right-from-bracket" style="color: #ea1a1a;"></i>
                                                <span class="mx-2">
                                                    Exit
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="#">Options <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=signIn">
                                            <span>
                                                <i class="fas fa-user-plus"></i>
                                                <span class="mx-2">Sign up</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=login">
                                            <span>
                                                <i class="fa-solid fa-right-to-bracket"></i>
                                                <span class="mx-2">Sign in</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=viewLogs">
                                            <span>
                                                <i class="fa-solid fa-users"></i>
                                                <span class="mx-2">
                                                    View Logs
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=exit">
                                            <span class="exit-link">
                                                <i class="fa-solid fa-right-from-bracket" style="color: #ea1a1a;"></i>
                                                <span class="mx-2">
                                                    Exit
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "home") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=home">home</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a class="nav-link" href="index.php?pagina=home">home</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "about") : ?>
                            <li>
                                <a class="nav-link active" href="index.php?pagina=about">about</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="index.php?pagina=about">about</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "service") : ?>
                            <li>
                                <a class="active" href="#0">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober ">
                                        <a class="active" href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober active">
                                        <a class="active" href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "Our story") : ?>
                            <li>
                                <a class="active" href="index.php?pagina=story">story</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="index.php?pagina=story">Our story</a>
                            </li>
                        <?php endif ?>


                        <?php if ($_GET["pagina"] == "gallery") : ?>

                            <li>
                                <a class="active" href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=gallery">
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=gallery">
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "blog") : ?>

                            <li>
                                <a class="active" href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a class="active" href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        <?php else : ?>
                            <li>
                                <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "contact") : ?>
                            <li>
                                <a class="active" href="index.php?pagina=contact">contact</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="index.php?pagina=contact">contact</a>
                            </li>
                        <?php endif ?>

                        <?php else : ?>
                        <li>
                            <a href="#">Options <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=signIn">
                                        <span>Sign In</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=login">
                                        <span>Login</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=viewLogs">
                                        <span>View Logs</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=exit">
                                        <span class="exit-link">Exit<i class="fas fa-sign-out-alt"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="active" href="index.php?pagina=index">Home</a>
                        </li>
                        <li>
                            <a href="index.php?pagina=about">About</a>
                        </li>
                        <li>
                            <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service">
                                        <span>Service</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service-single">
                                        <span>Service Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?pagina=story">Our story</a>
                        </li>
                        <li>
                            <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=event">
                                        <span>Our event</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=gallery">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=404">
                                        <span>Error 404</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog">
                                        <span>Blog</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog-single">
                                        <span>Blog Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?pagina=contact">Contact</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </header>
    <!--==== Header Section End ======= -->

    <?php
    if (isset($_GET["pagina"])) {
        if (
            $_GET["pagina"] == "signIn" ||
            $_GET["pagina"] == "viewLogs" ||
            $_GET["pagina"] == "login" ||
            $_GET["pagina"] == "exit" ||
            $_GET["pagina"] == "home" ||
            $_GET["pagina"] == "about" ||
            $_GET["pagina"] == "service" ||
            $_GET["pagina"] == "service-single" ||
            $_GET["pagina"] == "story" ||
            $_GET["pagina"] == "event" ||
            $_GET["pagina"] == "gallery" ||
            $_GET["pagina"] == "404" ||
            $_GET["pagina"] == "blog" ||
            $_GET["pagina"] == "blog-single" ||
            $_GET["pagina"] == "contact" ||
            $_GET["pagina"] == "edit"
        ) {
            include "paginas/" . $_GET["pagina"] . ".php";
        } else {
            include "paginas/404.php";
        }
    } else {
        include "paginas/home.php";
    }
    ?>

    <!--=========== Footer Section Here ========= -->
    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.php?pagina=home">
                            <img src="html/assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="active">
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li class="mr-none">
                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>

                        <ul class="footer__menu">
                            <?php if (isset($_GET["pagina"])) : ?>
                                <?php if ($_GET["pagina"] == "home") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=home">home</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=home">home</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "about") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=about">about</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=about">about</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "service") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=service">service</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=service">service</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "story") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=story">story</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=story">story</a>
                                    </li>
                                <?php endif ?>


                                <?php if ($_GET["pagina"] == "gallery") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=gallery">gallery</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=gallery">gallery</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "blog") : ?>
                                    <li>
                                        <a class="active" href="index.php?pagina=blog">blog</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="index.php?pagina=blog">blog</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "contact") : ?>
                                    <li class="mr-none active">
                                        <a href="index.php?pagina=contact">contact</a>
                                    </li>
                                <?php else : ?>
                                    <li class="mr-none">
                                        <a href="index.php?pagina=contact">contact</a>
                                    </li>
                                <?php endif ?>

                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=home">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?=">Registro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=service">service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=story">story</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=gallery">gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=blog">blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-none" href="index.php?pagina=contact">contact</a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Footer Section End ========= -->

    <!--Jquery 3 6 0 Min Js-->
    <script src="html/assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="html/assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="html/assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="html/assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="html/assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="html/assets/js/swiper-bundle.min.js"></script>
    <!--Magnific popup min Js-->
    <script src="html/assets/js/jquery.magnific-popup.min.js"></script>
    <!--main Js-->
    <script src="html/assets/js/main.js"></script>
</body>

</html>