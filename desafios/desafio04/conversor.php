<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Desafio 4</title>
    
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            
            $number = $_GET["number"] ?? 0;
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='03-09-2023'&@dataFinalCotacao='03-15-2023'&top=100&format=json";
            $cotacao = json_decode(file_get_contents($url));
            $padrao = numfmt_create("pt_BR", number_format::CURRENCY);
            // var_dump($cotacao);            
            foreach($cotacao->value as $valor){
                $ultimaCotacao = $valor->cotacaoVenda;//PEGAR A ULTIMA COTAÇÃO PARA FAZER O CALCULO E COM O FAZER O CALCULO            
            }
            // var_dump($ultimaCotacao);
            $conversao = $number / $ultimaCotacao;
            // $valorConvertido = number_format(("$number" / "$ultimaCotacao"), 2);
            echo "<p>Seus " . numfmt_format_currency($padrao, $number, "BRL") . "equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong></p>";
        ?>
        <p>Valor da cotação pego do <strong>Banco Central</strong></p>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>  
</body>
</html>
