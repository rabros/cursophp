<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $sec = $_GET['sec']?? 0;
    ?>
    <main>
        <h2>calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec" step="1" require value="<?=$sec?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            $sobra = $sec;
            $semanas = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            $seg = $sobra;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong> <?=number_format($sec, 0, ",", ".")?> de segundos</strong> equivalem a um total de:</p>
        <ul>
            <li> <?=$semanas?> semanas</li>
            <li> <?=$dia?> dias</li>
            <li> <?=$hora?> horas</li>
            <li> <?=$minuto?> minutos</li>
            <li> <?=$seg?> segundos</li>
        </ul>
    </section>
</body>
</html>