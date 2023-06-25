<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $valor_reajuste = $_GET['valor_reajuste'] ?? 0;
    ?>
    <main>
        <h2>Reajuste de preço</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Preço do produto</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step = "0.01" min="0.10">
            <label for="number">Qual será o percentual de reajuste? <span id="p">?</span>%</label>
            <input type="range" name="valor_reajuste" id="valor_reajuste" max="100" min="0" step="1" oninput="mudaValor()"value="<?=$valor_reajuste?>">
            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>
    
    <section>
       <h2>Resultado</h2>
       <?php 
        $porc = $valor_reajuste / 100;
        $novo_preco = $preco  + ($porc * $preco);
       ?> 
       <p>Novo preço será de R$<?=number_format($novo_preco, 2, ",", ".")?></p>
    </section>
    <script>
        mudaValor();
        function mudaValor(){
            p.innerText = valor_reajuste.value;
        }
    </script>
</body>
</html>