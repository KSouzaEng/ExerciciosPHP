<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

<form action="exercicio2.php" method="POST">
        <label for="valorA">Informe um numero</label><br><br>
        <input type="text" name="valor1" ><br><br>
        <label for="valorB">Informe outro valor</label><br><br>
        <input type="text" name="valor2" ><br><br>

        <input type="submit" value="Enviar">
        <button><a href="index.html">Cancelar</a></button>
</form>
</body>
<?php

    if(isset($_POST['valor1'])){

        $A = $_POST['valor1'];
        $B = $_POST['valor2'];

        echo ("Valor 1 digitado: ".$A);
        echo "<br>";
        echo ("Valor 2 digitado: ".$B);
        echo "<br>";

        $soma = $A + $B;
        $sub =  $A - $B;
        $mult = $A * $B;
        $div = $A / $B;
        echo "<br>";
        echo "<br>";
        echo ($A." + ".$B." = ".$soma);
        echo "<br>";
        echo ($A." - ".$B." = ".$sub);
        echo "<br>";
        echo ($A." * ".$B." = ".$mult);
        echo "<br>";
        echo ($A." / ".$B." = ".$div);        


    }
?>
</html>