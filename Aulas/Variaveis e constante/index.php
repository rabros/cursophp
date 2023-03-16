<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vairiaveis e operações MATH</title>
</head>
<body>
   <?php 
    $nome = "Cézar";
    $sobrenome = "Barros";
    const PAIS = "Brasil"; // constante 
   

    $nome = "João"; // variavel
    // deixou de ser Cezar para João
    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS ;

    //$NomeCompletoALuno = "Came Case"
    //%nome_completo_aluno = "Snake Case"
    
    //TIPOS DE DADOS

    //string - number (interger, float(double)) - boolean - arrays - object - null
    
    // 0x - hexadecimal, 0b - binario, 0 - octa
    // $num = 010;
    // echo "O valor da variavel é $num";

    // $v = 300;
    // var_dump($v);
    // var_dump vai mostrar o tipo primitivo e o valor dela

    // $num = (integer) 3e10 // 3 * 10^2
    // coersão "força a varivel virar o que está dentro do parenteses" o exemplo acima por padrão é float com "(integer)" virou inteiro

    // $vet = [1, 2, 3, 4, 6]
    // var_dump($vet) // array
    
    //object
    // class Pessoa {
    //     private string $nome;
    // }

    // $p = new Pessoa;
    // var_dump($p);
    
    ?>
    <br>
    <form action="index.php" method="get">
        <label for="number">Numero</label>
        <input type="number" name="number" id="idnumber">
    </form>    
        
    <?php
    $number = $_GET["number"] ?? "0";
    $multiplicacao = "$number" + 1;
    $soma = 1 + 1;
    $exp = 2 ** 3;
    echo nl2br("$soma , \n $exp, \n$number, \n$multiplicacao"); // nl2br esse comando faz que reconheca a tag \n por exemplo para pular linha
?> 
</body>
</html>

<?php 
    echo "joao \n barros"
?>

