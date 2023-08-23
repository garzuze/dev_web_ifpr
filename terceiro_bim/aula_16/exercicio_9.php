<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');

    $arquivo = fopen("log.txt", "a");
    echo fwrite($arquivo, date('H\hi\ms', time()) . " - " . date("d/m/Y") . "\n");
    fclose($arquivo);
    ?>
</body>
</html>