<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>JT Imports - Autopartes de alto desempeño</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Importación de Autopartes, partes off road, refacciones 4x4, refacciones alto desempeño, partes para autos clasicos, importación de vehiculos" name="keywords">
    <meta content="JT Imports - Autopartes de alto desempeño" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css?v=1.51" rel="stylesheet"> 
    <link href="css/polish.css" rel="stylesheet"> 
    <link rel="preload" href="img/hero-s.webp" as="image" type="image/webp">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+52 81 2918 5691</small>
                    <small class="px-3">|</small>
                    <a href="mailto:ventas@jtimports.com.mx" class="text-white">
                        <small><i class="fa fa-envelope mr-2"></i>ventas</small>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/jtimportsMX" target="_blank" rel="noopener noreferrer" aria-label="Facebook de  JT Imports">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.tiktok.com/@jt.imports.mx" target="_blank" rel="noopener noreferrer" aria-label="TikTok de JT Imports">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/jt.imports.mx/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de JT Imports">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><img src="img/logo-100.webp" alt="JT Imports" class="jtimports-logo"></i>IMPORTS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-label="Abrir menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <?php $current = basename($_SERVER['PHP_SELF']); ?>
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link<?php if($current == 'index.php') echo ' active'; ?>">Inicio</a>
                    <a href="about.php" class="nav-item nav-link<?php if($current == 'about.php') echo ' active'; ?>">Nosotros</a>
                    <div class="nav-item dropdown">
                        <a href="service.php" class="nav-link dropdown-toggle<?php if($current == 'service.php' || $current == 'subastas.php' || strpos($current, 'especialidad-') === 0) echo ' active'; ?>" data-toggle="dropdown">Servicio</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="service.php" class="dropdown-item<?php if($current == 'service.php') echo ' active'; ?>">General</a>
                            <a href="subastas.php" class="dropdown-item<?php if($current == 'subastas.php') echo ' active'; ?>">Subastas Copart & IAAI</a>
                            <div class="dropdown-divider"></div>
                            <a href="especialidad-clasicos.php" class="dropdown-item">Autos Clásicos</a>
                            <a href="especialidad-performance.php" class="dropdown-item">Performance / Tuning</a>
                            <a href="especialidad-offroad.php" class="dropdown-item">Off-Road / 4x4</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="blog.php" class="nav-link dropdown-toggle<?php if($current == 'blog.php' || strpos($current, 'blog-') === 0) echo ' active'; ?>">Blog</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog-importacion-monterrey.php" class="dropdown-item">Importación Monterrey</a>
                            <a href="blog-rutas-offroad-mty.php" class="dropdown-item">Rutas Off-Road Mty</a>
                            <a href="blog-iluminacion-reglamento-mty.php" class="dropdown-item">Reglamento LED Mty</a>
                            <a href="blog-aranceles-2025.php" class="dropdown-item">Aranceles 2025</a>
                            <a href="blog-calidad-chips-led.php" class="dropdown-item">Calidad de Chips LED</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link<?php if($current == 'contact.php') echo ' active'; ?>">Contacto</a>
                </div>
                <a href="contact.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cotizar</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->