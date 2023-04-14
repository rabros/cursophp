<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $salario = $_GET["num"]??0;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="number">Salário?</label>
            <input type="number" name="num" id="num" step="0.01" value="<?=$salario?>">
            <input type="submit" value="Calcular">
            <p>O valor base pra o salario minimo é <strong>R$1380,00</strong></p>
        </form>
    </main> 
    <section>
        <h2>Resultado final</h2>
        <?php 
            $salario_inteiro = (int)($salario/1380);
            $salario_sobra = $salario - (1380 * $salario_inteiro);
            echo "<p>Quem recebe um salario de " . number_format($salario,2,","). ", ganha <strong>$salario_inteiro salários mínimos + R$" . number_format($salario_sobra,2,",",".") . "</strong></p>"
        ?>
    </section>
</body>
</html>