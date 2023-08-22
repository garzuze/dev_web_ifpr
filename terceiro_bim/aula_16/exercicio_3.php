<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>
    <?php 
    function media($n1, $n2, $n3){
        return round(($n1 + $n2 + $n3) / 3, 1);
    }
    ?>

    <form method="get">
        <label>Digite as notas do pirralho:</label><br>
        <input type="number" name="nota1" required placeholder="nota 1"><br>
        <input type="number" name="nota2" required placeholder="nota 2"><br>
        <input type="number" name="nota3" required placeholder="nota 3"><br>
        <input type="submit" value="Enviar" name="submit">
    </form>

    <?php 
    if ('Enviar' === ($_GET['submit'] ?? false)) {
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $media = media($nota1, $nota2, $nota3);
        echo "Média das três notas do pirralho: $media";
    }
    ?>
</body>

</html>