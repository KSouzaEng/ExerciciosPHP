<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Numero</title>
</head>
<body>
   <form action="exercicio1.php" method="POST">
        <label for="valorA">Informe um numero</label><br><br>
        <input type="text" name="valor1" ><br><br>
        <label for="valorB">Informe outro valor</label><br><br>
        <input type="text" name="valor2" ><br><br>

        <input type="submit" value="Enviar">
        <button><a href="index.html">Cancelar</a></button>

    </form>
</body>
<?php
session_start();

if(isset($_POST['valor1'])){

   
    $A = $_POST['valor1'];
    $B = $_POST['valor2'];

   echo (" O valor 1 digitado foi : ".$A) ;
   echo "<br>";
   
   echo "<br>";
   echo (" O valor 2 digitado foi : ".$B);

   echo "<br>";
   
   echo "<br>";

   echo ("O maior numero é: ".max($A,$B));

}


?>

</html>
