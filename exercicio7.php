<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
</head>
<body>
<label >Intervalo de tempo</label>
     <form action="exercicio7.php" method="POST">
         <input type="text" name="intervalo" >
         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>
<?php

session_start();

if(isset($_POST['intervalo'])){

   (float) $intervalo = $_POST['intervalo'];


  (float) $hora = (float) $intervalo/ 60;
  (float) $minutos = (float)($intervalo )%60;

 (float)  $segundos  = (float) $intervalo*60.36;

    echo "<br>";
   echo (number_format($hora, 0)." horas  ". $minutos." minutos "." "
   .$segundos." segundos ");
}


?>
</body>
</html>