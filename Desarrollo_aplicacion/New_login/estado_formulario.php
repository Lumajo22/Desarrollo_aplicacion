<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado del Formulario</title>
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
        <?php

        if (isset($_GET['estado'])) {
            $estado = $_GET['estado'];
            
 
            switch ($estado) {
                case 'aceptado':
                    echo "<p>¡El formulario ha sido aceptado con éxito!</p>";
                    break;
                case 'rechazado':
                    echo "<p>Lo sentimos, el formulario ha sido rechazado.</p>";
                    break;
                case 'inactivo':
                    echo "<p>El formulario está inactivo en este momento.</p>";
                    break;
                default:
                    echo "<p>Estado desconocido.</p>";
                    break;
            }


            echo "<form action='pagina.php' method='GET'>";
            echo "<input type='hidden' name='estado' value='$estado_formulario'>";
            echo "<button type='submit' name='estado' value='aceptado'>Aceptado</button>";
            echo "<button type='submit' name='estado' value='rechazado'>Rechazado</button>";
            echo "<button type='submit' name='estado' value='inactivo'>Inactivo</button>";
            echo "</form>";


            $estado_formulario = "aceptado"; 

            $letrero_estado = "";
            $letrero_color = "";

            if ($estado_formulario == "aceptado") {
                $letrero_estado = "Activo";
                $letrero_color = "green";
            } elseif ($estado_formulario == "rechazado") {
                $letrero_estado = "Inactivo";
                $letrero_color = "red";
            } elseif ($estado_formulario == "inactivo") {
                $letrero_estado = "Inactivo";
                $letrero_color = "gray";
            } else {
                $letrero_estado = "Desconocido";
                $letrero_color = "black";
            }

            echo "<div style='color: $letrero_color;'>Estado del formulario: $letrero_estado</div>";
        }
        ?>
    </div>
</body>
</html>
