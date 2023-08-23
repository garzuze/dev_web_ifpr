<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>
    <form method="get">
        <label>Digite a palavra:</label>
        <input type="text" name="palavra">

        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $palavra = $_GET['palavra'];

        $criptografia = ['t' => 'p', 'e'=>'o', 'n'=>'l', 'i'=>'a', 's' =>'r',
                        'p' => 't', 'o'=>'e', 'l'=>'n', 'a'=>'i', 'r'=>'s'];

        // Substituir as letras de acordo com a criptografia
        $palavra_criptografada = strtr($palavra, $criptografia);

        echo "Palavra criptografada: $palavra_criptografada";
    }
    ?>
</body>

</html>