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
