<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    // Verificar si la conexión está establecida
    if (!isset($conn) || !$conn) {
        die("Error de conexión a la base de datos");
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
   
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
    } else {
        $error[] = 'Correo electrónico o contraseña incorrectos!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <form action="" method="post">
        <h3>Inicia sesion</h3>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>
        <input type="email" name="email" required placeholder="Digita tu correo">
        <input type="password" name="password" required placeholder="Digita tu contraseña">
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>No tienes cuenta? <a href="register_form.php">Registrate ahora</a></p>
    </form>
</div>
</body>
</html>
