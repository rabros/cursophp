<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 - PHP</title>
</head>
<body>
    <?php
        $ano = $GET['ano_atual'] ?? $ano_atual;
        $ano_nasc = $_GET['ano_nasc'] ?? 2000;
        $ano_atual = date['Y'];
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Digite seu ano de nascimento</label>
            <input type="number" name="ano_nasc" id="ano_nasc" max="$ano_atual" value="<?=$ano_nasc?>">
            <label for="number">Quer saber sua idade em que ano? (Atualmente estamos em $ano)</label>
            <input type="number" name="ano" id="ano_atual" value="<?=$ano?>">
            <input type="submit" value="Calcular idade">
        </form>
    </main> 
    <section>
        <?php
            $idade = $ano_atual - $ano_nasc;
            echo "Em $ano_atual você terá $idade anos";
        ?>
    </section>
</body>
</html>
