<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividor</title>
</head>
<body>
<main>
<?php 
    $valor1 = $_GET['div1'] ?? 0;
    $valor2 = $_GET['div2'] ?? 0;
        ?>
<h2>Digite os números</h2>
    <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="div1">Divisor</label>
        <input type="number" name="div1" id="div2" value="<?= $valor1?>">
        <label for="div2">Dividendo</label>
        <input type="number" name="div2" id="div2" value="<?= $valor2?>">
        <input type="submit" value="Dividir">
    </form> 

    <section id="resultado">
<h2>Resultado da divisão</h2>
    <?php
    echo intdiv($valor1, $valor2);
    //$div = $valor1 / $valor2;
    $rest = $valor1 % $valor2;
    echo  "<p>$valor1</p>";
    echo  "<p>$valor2</p>";
    //echo  "<p>$div</p>";
    echo "<p>$rest</p>" ;
    

    
    
    
    ?>


        


    </section>

</main>    
</body>
</html>