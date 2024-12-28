<?php

session_start();

if(isset($_POST['enviar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $cedula = $_POST['cedula'];

    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['email'] = $email;    
    $_SESSION['telefono'] = $telefono; 
    $_SESSION['cedula'] = $cedula; 

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección</title>
    <style>*{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    }</style>
</head>
<body>

<br><br><br><br><br><br><br>
    <center><img src="/assets/loading.gif" alt="" srcset="" width="25%"></center>

    <script>
        // Espera 3000 milisegundos (3 segundos) antes de redirigir
        setTimeout(function() {
            // Cambia la URL a la que quieres redirigir
            window.location.href = 'pago.php';
        }, 6000);
    </script>

</body>
</html>
