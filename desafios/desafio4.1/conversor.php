<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
</head>
<body>
   <main>
    <?php
        $inicio = date("m-d-Y");
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='. $inicio .'&@dataFinalCotacao='. $fim .'&$top=1&$format=json&$select=cotacaoCompra'
        $cotacao = json_decode(file_get_contents($url), true); // true para virar um array no lugar de objetic
        //padrao internalization
        $padrao = numfmt_create("pt_BR", numberFormatter::CURRENCY);

        $number = $_GET["number"] ?? 0;
        $valor_convertido = $number / $cotacao;

        echo "<p>Seus ". numfmt_format_currency($padrao, $number, "BRL") ." equivalem a <strong>". numfmt_format_currency($padrao, $valor_convertido,"USD") ."</strong></p>"
    ?>
    <p>os dados foram pegos direto da API do <strong>Banco Central</strong></p>
    <button onclick="javascript:history.go(-1)">Voltar</button>    
   </main> 
</body>
</html>