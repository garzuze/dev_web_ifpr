<?php
session_start();
$contador = 0;
if (isset($_SESSION['contador'])) {
    $contador = $_SESSION['contador'];
    $_SESSION['contador'] = $contador + 1;
} else {
    $_SESSION['contador'] = $contador;
}
echo "contador = " . $_SESSION['contador'] . "<br/>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link rel="shortcut icon" href="https://picocss.com/favicon.ico" />
    <link rel="canonical" href="https://picocss.com/examples/classless/" />

    <!-- Pico.css (Classless version) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css" />
</head>

<body>
    <form action="destroy.php">
        <button type="submit">Reiniciar contador</button>
    </form>
</body>

</html>