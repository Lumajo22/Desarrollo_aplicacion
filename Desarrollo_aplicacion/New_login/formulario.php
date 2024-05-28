<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Emprendimiento</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pagina.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu .logo {
            max-width: 100px;
        }
        .menu-icono {
            width: 30px;
            cursor: pointer;
            display: none;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            margin-right: 20px;
        }
        .navbar ul li a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }
        .navbar ul li .btn {
            background-color: #FC697A;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar ul li .btn:hover {
            background-color: #FFC5C5;
        }
        form {
            background-color: #E3F1FB;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        button[type="submit"] {
            background-color: #FC697A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #FFC5C5;
        }
        .imagen {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <img src="imagenes/LOGO2.png" class="logo" alt="Logo">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="menu.png" class="menu-icono" alt="Menu Icon">
            </label>
            <nav class="navbar">
                <ul>
                <li><a href="Pagina.php">Inicio</a></li>
                    <li><a href="Lugares.php">Lugares</a></li>
                    <li><a href="Emprendimientos.php">Emprendimientos</a></li>
                    <li><a href="Comidas.php">Restaurantes</a></li>
                    <li><a href="formulario.php">Formulario</a></li>
                    <li><a href="logout.php" class="btn">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <h2>Registro de Emprendimiento</h2>
            <p>
                <label for="nombre">Nombre del Emprendimiento:</label>
                <input type="text" id="nombre" name="nombre" required>
            </p>
            <p>
                <label for="imagen">Imagen del Emprendimiento:</label>
                <input type="file" id="imagen" name="imagen" accept="image/*">
                <img src="" alt="Imagen del Emprendimiento" class="imagen">
            </p>
            <p>
                <label for="descripcion">Descripción del Emprendimiento:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </p>
            <p>
                <label for="redes_sociales">Redes Sociales:</label>
                <input type="text" id="redes_sociales" name="redes_sociales" required>
            </p>
            <p>
                <button type="submit">Enviar Información</button>
            </p>
        </form>
    </div>
</body>
</html>

