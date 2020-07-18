<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem crescente</title>
</head>
<body>
<label >Informe um número</label>
     <form action="exercicio10.php" method="POST">
         <input type="text" name="num" >
         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>
<?php
    session_start();

    if(isset($_POST['num'])){

    $num = $_POST['num'];

    $i = 1;
    while($i <= $num){

        echo ("<br>");
        echo ($i);
        echo ("<br>");
        
    $i++;
    }

    }

?>
</body>
</html>

