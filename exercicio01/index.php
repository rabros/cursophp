<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01</title>
    
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $number = $_GET("number");
            $antecessor = ($number) - 1;
            $sucessor = ($number) + 1;
            echo "Seu antecessor é $antecessor; \n Seu sucessor é $sucessor."
        ?>
        <p><a href="javascript:history.go(-1)"></a>Voltar a pagina anterior</p>
    </main>
</body>
</html>