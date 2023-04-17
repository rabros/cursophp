<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <?php 
            $number = $_GET["number"] ?? 0;
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" value="<?="$number"?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $raiz_quadrada = sqrt($number);
            $raiz_cubica = pow($number,(1/3));
            echo "<ul>
                    <li> A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3, ",") . 
                    "</strong><li> A sua raiz cubica é <strong>" . number_format($raiz_cubica, 3, ",") .
                "</strong><ul>";
        ?>
    </section>    
</body>
</html>