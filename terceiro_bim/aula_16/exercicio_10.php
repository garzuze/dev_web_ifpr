<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>

<body>
    <form method="get">
        <label>Posição inicial do recruta</label>
        <select name="posicao">
            <option name="norte" value="norte">Norte</option>
            <option name="sul" value="sul">Sul</option>
            <option name="leste" value="leste">Leste</option>
            <option name="oeste" value="oeste">Oeste</option>
        </select><br>
        <label>Comandos</label>
        <input type="text" name="comandos"><br>
        <input type="submit" name="submit"><br>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $posicao = $_GET['posicao'];
        $comandos = strtolower($_GET['comandos']);

        $posicoes = ['norte', 'leste', 'sul', 'oeste'];
        $index = array_search($posicao, $posicoes);

        $direita = substr_count($comandos, 'd');
        $esquerda = substr_count($comandos, 'e');

        if ($direita > $esquerda) {
            $movimento = ($direita - $esquerda) % 4;
            $index = ($index + $movimento) % 4; // é preciso calcular a posição relativa de cada elemento
            $direcao = $posicoes[$index];
        } else {
            $esquerda = $esquerda - $direita;
            $index = ($posicao_index + $movimento) % 4;
            $direcao = $posicoes[$index];
        }

        echo "O soldado estará virado para a direção: $direcao <br>";
    }
    ?>
</body>

</html>