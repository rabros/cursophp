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
     <main>
         <h1>Resultado</h1>
         <?php
                $number = $_GET["number"];
                $antecessor = ($number) - 1;
                $sucessor = ($number) + 1;
                echo "Foi digitado: <strong>$number</strong>";
                echo "<br>Seu <em>antecessor</em> é: $antecessor";
                echo "<br>Seu <em>sucessor</em> é $sucessor";
             ?>
             <button><a href="javascript:history.go(-1)"> &#x2B05; Voltar</a></button>
     </main>    
</body>
</html>
