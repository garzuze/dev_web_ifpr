<?php
session_start();
$competencias = ['bd', 'dev_web', 'dev_mob']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css" />
</head>

<body>
    <section style="width: 360px; margin: 0 auto;">
        <h3>Dados:</h3>

        <p>Usuário: <?php echo $_SESSION['name']; ?></p>
        <p>CPF: <?php echo $_SESSION['cpf']; ?></p>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Senha: KKKKKKKKKKKKKKKKK trollei</p>

        <h3>Competências:</h3>
        <?php 
            foreach($competencias as $competencia) {
                if (isset($_POST[$competencia])){
                    echo "- $_POST[$competencia] <br>";
                }
            }
        ?>
    </section>
</body>

</html>