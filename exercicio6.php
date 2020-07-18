<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
     <label >Ano de nascimento</label>
     <form action="exercicio6.php" method="POST">
         <input type="text" name="ano" >
         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>

<?php
session_start();

if(isset($_POST['ano'])){


$hoje= date('Y'); 

//echo ($hoje);

$dataNascimento = $_POST['ano'];


$idadeAtual = $hoje - $dataNascimento;

echo "<br>";
echo ("idade em anos: ".$idadeAtual." anos");
echo ("\n");


$idadeDias = $idadeAtual * 365;
echo ("<br>");  
echo ("idade em dias: ".$idadeDias." dias");
 echo ("\n");

   $idadeSemanas = $idadeAtual * 48;
   echo ("<br>"); 
   echo ("idade em semanas: ".$idadeSemanas." semanas");
   echo ("\n");
   
}

?>
</body>
</html>