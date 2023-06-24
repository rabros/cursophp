<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $ano_atual = date("Y");
        $ano = $_GET['ano'] ?? $ano_atual;
        $ano_nasc = $_GET['ano_nasc'] ?? 2000;        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Digite seu ano de nascimento</label>
            <input type="number" name="ano_nasc" id="ano_nasc" min="1900" max="<?=$ano_atual?>" value="<?=$ano_nasc?>">
            <label for="number">Quer saber sua idade em que ano? Atualmente estamos em <strong><?=$ano_atual?></strong></label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Calcular idade">
        </form>
    </main> 
    <section>
        <?php
            $idade = $ano - $ano_nasc;
        ?>
        <h2>Resulado</h2>
        <p>Em <?=$ano?> você terá <?=$idade?> anos!</p>
    </section>
</body>
</html>
