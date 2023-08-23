<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>

<body>
    <?php
    function raiz($numero)
    {
        $x = 0.5 * (1 + ($numero / 1)); //chute inicial = 1
        do {
            $x_anterior = $x;
            $x = 0.5 * ($x + ($numero / $x));

            // Condicional para a diferença sempre ser positiva
            if ($x > $x_anterior) {
                $diferença_absoluta = $x - $x_anterior;
            } else {
                $diferença_absoluta = $x_anterior - $x;
            }
        } while ($diferença_absoluta > 0.0001);
        return $x;
    }
    ?>

    <form method="get">
        <label>Digite o número que quer descobrir a raiz quadrada</label>
        <input type="number" name="numero">
        <input type="submit" name="Enviar">
    </form>
    <br>
    <?php
    if (isset($_GET['Enviar'])) {
        $numero  = $_GET['numero'];
        $minha_raiz = raiz($numero);
        echo "A raiz do número $numero é: $minha_raiz";
    }
    ?>
</body>

</html>