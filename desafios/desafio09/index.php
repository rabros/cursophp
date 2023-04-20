<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
        <?php
            $n1 = $_GET["n1"] ?? 0;
            $p1 = $_GET["p1"] ?? 0;
            $n2 = $_GET["n2"] ?? 0;
            $p2 = $_GET["p2"] ?? 0;
        ?>

        <h1>Calculando médias</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="n1">Nota 1</label>
            <input type="number" name="n1" id="n1" step="0.1" value="<?="$n1"?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" step="0.1" value="<?="$p1"?>">
            <label for="n2">Nota 2</label>
            <input type="number" name="n2" id="n2" step="0.1" value="<?="$n2"?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" step="0.1" value="<?="$p2"?>">
            <input type="submit" value="Calcular médias">
        </form>
   </main>
   <section>
        <h2>Resultado das médias</h2>
        <?php
            $media = ($n1+$n2)/2;
            $media_pon = (($n1*$p1)+($n2*$p2))/($p1+$p2);

            echo "<strong>A Media</strong> entre as notas $n1 e $n2 é $media";
            echo "<strong>A Media Ponderada</strong> entre as notas $n1 e $n2 com os pesos $p1 e $p2 é $media_pon";
        ?>
   </section> 
</body>
</html>