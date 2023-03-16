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
            echo "Gerando um número aleatório entre 0 e 100... <br>O valor gerado foi " . rand(0, 100); // Falta dar função do botao pra sortear.
        ?>
        <button onclick="javascript:.window.location.href'desafio02.php'">&#x1F504; Gerar novo</button>
    </main>    
</body>
</html>
