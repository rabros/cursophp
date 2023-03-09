<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //Muda time zone para hora UTC
        echo "hoje é dia " . date("d/M/Y"); // mostra a data, d (dia), M(mes), Y(ano). D(dia da semana)
        echo " e a hora atual é " . date("G:i:s"); //G(hora), i(minuto), s(segundos)
        //echo " e a hora atual é " . date("G:i:s"); o . entre a frase e o date é para concatenar
    ?>
</body>
</html>