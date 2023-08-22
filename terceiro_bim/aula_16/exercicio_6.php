<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>
    <h1>Tem dado em casa?</h1>
    <img src="images/humor.jpg">
    <br>
    <?php
    function jogarDado($faces){
        $dado = [];

        for ($i = 1; $i <= $faces; $i++) {
            $dado[$i] = 0;
        }

        for ($i = 1; $i <= 100; $i++) {
            $face = rand(1, $faces);
            $dado[$face] += 1;
        }

        return $dado;
    }
    ?>
    <form method="get">
        <label>Digite o número de faces do dado</label>
        <input type="number" name="faces">
        <input type="submit" name="Enviar">
    </form>
    <br>
    <?php
    if (isset($_GET['faces'])) {
        $faces = $_GET['faces'];
        $meu_dado = jogarDado($faces);
        echo "Dado após ser jogado 100 vezes: <br>";

        foreach ($meu_dado as $face => $quantidade) {
            echo "face $face: $quantidade vezes<br>";
        }
    }
    ?>
</body>

</html>