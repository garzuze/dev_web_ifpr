<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>
    <?php
    function ajuste($preco, $percentual) {
        return $preco * (($percentual / 100) + 1);
    }
    ?>
    <form method="get">
        <label>Digite o preço</label>
        <input type="number" name="preco" required>
        <label>Digite o percentual de reajuste</label>
        <input type="number" name="percentual" required>
        <input type="submit" value="Enviar" name="submit">
    </form>
    <?php 
    if ('Enviar' === ($_GET['submit'] ?? false)) {
        $preco = $_GET['preco'];
        $percentual = $_GET['percentual'];
        $novo_preco = ajuste($preco, $percentual);
        echo "Preço após reajuste: $novo_preco";
    }
    ?>
</body>

</html>