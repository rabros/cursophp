<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Desafio 3</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $cotacao = 5.28;
        $number = $_GET["number"] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // $conversao = number_format(("$number") / 5.28, 2);
        $conversao = $number / $cotacao;        
        echo "<p>Seus " . numfmt_format_currency($padrao, $number, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong></p>";
        ?>
        <p><strong>Cotação fixa de R$5.27</strong> informada direto no codigo</p> 
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>
