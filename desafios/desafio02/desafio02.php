<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 02 </title>
</head>
<body>    
    <main>
        <header>
            <p><b>Sorteador de numeros</b></p>
        </header>
        <?php
            echo "<p>Gerando um valor de 0 a 100 aleatório <strong>" . rand(0, 100) . "</strong></p>";
        ?>
        <!--<button onclick="javascript:document.location.reload()"> &#x1F504; Gerar novo</button>!-->
        <button onclick="window.location.reload()">&#x1F504; Gerar novo</button>
    </main>    
</body>
</html>
