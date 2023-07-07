<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            width: 175px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php 
        $total = $_REQUEST['valor'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Qual valor de saque? <strong>(R$)</strong></label>
            <p style="font-size: 0.7em;"><sup>*</sup>Somente notas de R$100, R$50, R$10 e R$5</p>
            <input type="number" name="valor" id="v1" required value="<?=$total?>" step="5">
            <input type="submit" value="Sacar!">
        </form>
    </main>
    <section>
        <?php 
            $resto = $total;
            //Notas de 100
            $tot100 = floor($resto / 100);
            $resto %= 100;
            //Notas de 50
            $tot50 = floor($resto / 50);
            $resto %= 50;
            //Notas de 10
            $tot10 = floor($resto / 10);
            $resto %= 10;
            //Nota de 5
            $tot5 = floor($resto / 5);
            $resto %= 5;

        ?>
        <h2>Resultado do saque: R$ <?=number_format($total, 2, ",", ".")?></h2>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$tot5?></li>
        </ul>
    </section>
</body>
</html>