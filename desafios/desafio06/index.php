<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
        <?php 
            $valor1 = $_GET["dividendo"]??0;
            $valor2 = $_GET["divisor"]??0;
        ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$valor1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main> 
    <section>
       <h2>Estrutura da Divisão</h2> 
       <?php 
            $resto_div = $valor1 % $valor2;
            $inteiro_div = (int)($valor1/$valor2);
            echo "<p>$valor1 | $valor2</p>";
            echo "<p><u>$resto_div</u> | $inteiro_div</p>"
        ?>
    </section>
</body>
</html>