<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a Média</title>
</head>
<body>
   <form action="exercicio5.php" method="POST">
        <label for="valorA">Informe a primeira nota</label><br><br>
        <input type="text" name="nota1" ><br><br>
        <label for="valorB">Informe a segunda nota</label><br><br>
        <input type="text" name="nota2" ><br><br>
        <label for="valorB">Informe a terceira nota</label><br><br>
        <input type="text" name="nota3" ><br><br>
        
        


        <input type="submit" value="Enviar">
        <button><a href="index.html">Cancelar</a></button>

    </form>
</body>
<?php
session_start();

if(isset($_POST['nota1'])){

   
    $A = $_POST['nota1'];
    $B = $_POST['nota2'];
    $C = $_POST['nota3'];

    echo "<br>";

   echo (" A nota 1 digitado foi : ".$A) ;
   echo "<br>";

   echo (" A nota 2 digitado foi : ".$B) ;
   echo "<br>";
   
   echo (" A nota 1 digitado foi : ".$C) ;
   echo "<br>";
   
   $media = (($A + $B + $C)/3);


   if($media >= 7){
    
    echo ("Aprovado com a media: ". $media);
    echo "<br>";
   }else{

      echo ("Reprovado com a média: ".$media);
   }
  

}


?>

</html>