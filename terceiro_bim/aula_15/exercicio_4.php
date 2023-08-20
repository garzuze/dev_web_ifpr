<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>

<body>
    <?php
    $numeros_legais = [20, 21, 777, 69, 54, 13, 169, 7, 8, 24];
    echo "numeros legais: <br>";
    print_r($numeros_legais);

    $elemento_unico = 11;
    echo "<br> elemento unico: $elemento_unico <br>";

    $resultado = in_array($elemento_unico, $numeros_legais);
    if ($resultado == false) {
        echo "o elemento unico não está contido na lista de numeros legais";
    } else {
        echo "o elemento unico está contido na lista de numeros legais";
    }
    ?>
</body>

</html>