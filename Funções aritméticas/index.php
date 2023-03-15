<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <hr>
    <?php
        $r = -2000;
        
        // echo "O valor de abs($r) é " . abs($r); // Retorna o valor absoluto

        // echo base_convert(254, 10, 8); // Conversor de dados, lendo a função é tranformar da base 10 para base 8, (2,8,10,16)

        //ceil(), floor(), round() - respectivamente arredonda para cima, baixo, e o padrao matematico

        //hypot() - tamanho de uma cateto, tamanho de outro e essa função calcula a hipotenusa

        //intdiv() - parte inteira da divisão
        $div = intdiv(5, 2);
        echo "a parte inteira da divisao de 5/2 é " . $div;

        //min(1, 2, 3) e max(3, 4, 1) - fala o menor e maior valor dentro dos valores colocados

        //pi(); - mostra o valor de pi | M_PI -> constante de pi

        //pow(2, 5); 2 elevado a 5 - se usar essa função perde a ordem de precedencia

        //sin(0), cos(), tan(0)

        //sqrt(x) - raiz quadrada de x

    ?>
</body>
</html>