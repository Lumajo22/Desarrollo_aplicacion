<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagina.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selector de Idioma</title>
        <script>
            function changeLanguage() {
                var select = document.getElementById("select-language");
                var selectedOption = select.options[select.selectedIndex];
                var newUrl = selectedOption.value;
                window.location.href = newUrl;
            }
        </script>
    </head>
    
    <body>
        <div class="language-selector">
            <label for="select-language">Selecciona tu idioma:</label>
            <select id="select-language" onchange="changeLanguage()">
                <option value="idiomas/es.html">Español</option>
                <option value="idiomas/en.html">Inglés</option>
                <option value="idiomas/fr.html">Francés</option>
                <option value="idiomas/pt.html">Portugués</option>
            </select>
        </div>
    </header>
    <header class="header">
        <div class="menu container">
            <img src="imagenes/LOGO2.png" class="logo" alt="">
            <input type="checkbox" id="menu" />
            <label for="menu">
            <img src="menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="Pagina.php">Inicio</a></li>
                    <li><a href="Lugares.php">Lugares</a></li>
                    <li><a href="Emprendimientos.php">Emprendimientos</a></li>
                    <li><a href="Comidas.php">Restaurantes</a></li>
                    <li><a href="estado_formulario.php">Estado formulario</a></li>
                    <li><a href="logout.php" class="btn">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-text">
                <h1>LOS MEJORES SITIOS PARA CONOCER</h1>
                <p>
                    "Map City Huila" es una emocionante aplicación que abre las puertas a la riqueza cultural y
                    gastronómica de la región del Huila. Diseñada para los ciudadanos curiosos y los amantes de las
                    aventuras locales, esta plataforma invita a descubrir los tesoros ocultos y los emprendimientos
                    emergentes en la vibrante ciudad de Neiva y sus alrededores.

                    Desde encantadores restaurantes hasta innovadores emprendimientos, "Map City Huila" ofrece una
                    amplia variedad de destinos para explorar y disfrutar. Con un enfoque en resaltar los negocios
                    locales 100% opitas, la aplicación no solo promueve la economía regional, sino que también celebra
                    la diversidad y autenticidad de la cultura huilense. Únete a nosotros
                    mientras exploramos, disfrutamos y animamos a todos a seguir explorando los encantos de la región
                    del Huila.
                </p>
            </div>
            <div class="header-img">
                <img src="imagenes/Neiva3.jpg" alt="">
            </div>
        </div>
    </header>
    <section class="general container">
        <div class="general-1">
            <div class="general-card">
                <img src="imagenes/icon.1.png" alt="">
                <h3>ROPA</h3>
                <p>
                    ¡Conoce los nuevos emprendimientos 100% opita!
                </p>
            </div>
            <div class="general-card">
                <img src="imagenes/icon.2.png" alt="">
                <h3>LUGARES</h3>
                <p>
                    ¡Descubre aquí lugares emblemáticos Huilenses!
                </p>
            </div>
            <div class="general-card">
                <img src="imagenes/icon.3.png" alt="">
                <h3>RESTAURANTES</h3>
                <p>
                    ¡Explora aquí una selección de restaurantes para deleitar tu paladar!
                </p>
            </div>
        </div>

        <div class="general-2">
            <h2>Nuestros servicios</h2>
            <p>
                En "Map City Neiva", ofrecemos una ventana a la innovación y tradición del Huila, destacando
                emprendimientos, lugares y restaurantes locales que, aunque tal vez no sean ampliamente conocidos,
                representan lo mejor de nuestra región.
            </p>
        </div>
    </section>
    <div class="container">
        <div class="card">
            <img src="imagenes/cascada2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Las mollas del Huila</h5>
                <p class="card-text">Descubre las increíbles mollas que se encuentran en un lugar desconocido de nuestra
                    región, aventurate a conocer nuevas experiencias</p>
                <a href="Emprendimientos/moll
