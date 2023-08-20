<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php 
        $matriz = [[7, 77, 777], [7, 14, 21], [-7, -77, -777]];

        foreach($matriz as $linha) {
            foreach($linha as $coluna){
                echo "$coluna | ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>