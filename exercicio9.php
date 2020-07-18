<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maçãs</title>
</head>
<body>
<label >Informe a quantidade de maçãs</label>
     <form action="exercicio9.php" method="POST">
         <input type="text" name="quant" >
         <input type="submit" value="Enviar">
         <button><a href="index.html">Cancelar</a></button>
     </form>

     <?php
        session_start();

        if(isset($_POST['quant'])){

        $quant = $_POST['quant'];

       

        if($quant >= 12){

            $preco = $quant * 1.00;
            echo "<br>";
            echo ("Quantidade de maçãs: ".$quant);
            echo "<br>";
            echo (" Valor total: ".number_format ($preco,2));
            echo "<br>";
        }else{

            echo "<br>";
            $preco = $quant*1.30;
            echo ("Quantidade de maçãs: ".$quant);
            echo "<br>";
            echo (" Valor total: ".number_format ($preco,2));
            echo "<br>";
        }
    }
        
     ?>
</body>
</html>