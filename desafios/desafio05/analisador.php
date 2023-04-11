<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php
         $num = $_GET["num"] ?? 0;
         $int = (int)$num;
         $deci = $num - $int;

         echo "<p>Analisando o <strong>$num</strong></p>";
         echo "<p>
                <ul>
                    <li>Inteiro: " . number_format($int, 0, ".", ",") . 
                   "<li>Decimal: " . number_format($deci, 3, ".", ",") .
               "</ul>
              </p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>  
</body>
</html>
