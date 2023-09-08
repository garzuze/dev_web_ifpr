<?php 
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pwd'] = $_POST['pwd'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competencias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css" />
</head>

<body>
    <section style="width: 360px; margin: 0 auto;">
        <h3>Competências</h3>
        <form method="post" action="resultado.php">
            <input type="checkbox" name="bd" value="Banco de Dados">
            <label>Banco de Dados</label><br>
            <input type="checkbox" name="dev_web" value="Desenvolvimento web">
            <label>Desenvolvimento web</label><br>
            <input type="checkbox" name="dev_mob" value="Desenvolvimento móvel">
            <label>Desenvolvimento móvel</label><br>
            <button type="submit" name="submit">Enviar</button>
        </form>
    </section>

</body>

</html>