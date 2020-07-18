<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto de Gasolina</title>
</head>
<body>
<label >Informe o tipo de combustivel</label>
     <form action="exercicio12.php" method="POST">
         <input type="text" name="tipo" > <br><br>
        <label > Informe a quantidade de litros abastecido</label><br><br>
         <input type="text" name="litros" ><br><br>

         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>

     <?php

     session_start();

     if(isset($_POST['tipo'])){

        $tipo_combustivel = $_POST['tipo'];
        $litros = $_POST['litros'];

        if($tipo_combustivel == 'A' || $tipo_combustivel == 'a'){

            if($litros <= 20){

                $total = $litros * 2.19;
                echo "<br>";
                echo ("Valor sem desconto:  ".$total);
                $desconto = $litros * (2.19 * 0.03);
                echo "<br>";
                echo ("Valor com desconto:  ".$desconto);
                $valorTotal = $total - $desconto;
                echo "<br>";
                echo  ("Valor a pagar: ".$valorTotal);
            }
            else {
                $total = $litros * 2.19;
                echo "<br>";
                echo ("Valor sem desconto:  ".$total);
                $desconto = $litros * (2.19 * 0.05);
                echo "<br>";
                echo ("Valor do desconto:  ".$desconto);
                $valorTotal = $total - $desconto;
                echo "<br>";
                echo  ("Valor a pagar: ".$valorTotal);


            }
        }

        
        if($tipo_combustivel == 'G' || $tipo_combustivel == 'g'){

            if($litros <= 20){

                $total = $litros * 2.99;
                echo "<br>";
                echo ("Valor sem desconto:  ".$total);
                $desconto = $litros * (2.99 * 0.04);
                echo "<br>";
                echo ("Valor do desconto:  ".$desconto);
                $valorTotal = $total - $desconto;
                echo "<br>";
                echo  ("Valor a pagar: ".$valorTotal);

            }
            else {

                $total = $litros * 2.99;
                echo "<br>";
                echo ("Valor sem desconto:  ".$total);
                $desconto = $litros * (2.99 * 0.06);
                echo "<br>";
                echo ("Valor do desconto:  ".$desconto);
                $valorTotal = $total - $desconto;
                echo "<br>";
                echo  ("Valor a pagar: ".$valorTotal);


            }


        }

        }
    

     ?>
</body>
</html>