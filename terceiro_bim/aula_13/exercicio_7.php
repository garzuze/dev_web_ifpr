<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <?php 
        for($i=0; $i <= 100; $i++) {
            if ($i % 2 === 0){
                echo("<p>" . $i . " - O número é par!</p>");
            } else {
                echo("<p>" . $i . "- O número é impar!</p>");
            }
        }
    ?>
</body>
</html>