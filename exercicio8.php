<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<label >Informe um numero para imprimir sua tabuada</label>
     <form action="exercicio8.php" method="POST">
         <input type="text" name="num" >
         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>
     <?php

        session_start();

        if(isset($_POST['num'])){

            $n = $_POST['num'];
            
            for ($i=1; $i<=10; $i++){

                $result = $n * $i;
                
                echo "<br>";
                echo ($n. " X ". $i." = ".$result);
                echo "<br>";
        }

    }
     ?>
</body>
</html>