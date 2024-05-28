<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
    $estado = "aceptado"; 
    
    
    header("Location: formulario.php?estado=$estado");
    exit();
}


header("Location: formulario.php");
exit();
?>
