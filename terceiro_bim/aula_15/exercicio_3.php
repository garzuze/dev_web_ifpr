<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php 
        $vetor = [20, 21, 777, 69, 64];
        $soma = 0;
        $multiplicacao = 1;
        echo "<h3>numeros: </h3>"; 
        for ($i=0; $i<=sizeof($vetor) - 1; $i++){
            echo $vetor[$i] . "<br>";
            $soma += $vetor[$i];
            $multiplicacao *= $vetor[$i];
        }

        echo "soma: " . $soma . "<br>";
        
        echo "multiplicação: " . $multiplicacao. " (caramba)";
    ?>
</body>
</html>