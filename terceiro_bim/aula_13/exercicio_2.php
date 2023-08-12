<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php

    $frase1 = "C'est un beau roman, ";
    $frase2 = "c'est une belle histoire. ";
    $frase3 = "C'est une romance d'aujourd'hui!";

    $frase_final = $frase1 . $frase2 . $frase3;
    ?>

    <div class="max-w mt-6 mx-auto text-center">
        <p><?php echo($frase_final);?> </p>
    </div>
</body>
</html>