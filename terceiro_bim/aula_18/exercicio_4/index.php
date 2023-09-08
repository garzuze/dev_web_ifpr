<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css" />
</head>

<body>
    <section style="width: 360px; margin: 0 auto;">
        <h2>Cadastro</h2>
        <p>
            Seja bem vindo! Bora fazer seu cadastro?
        </p>
        <form action="competencias.php" method="post">
            <input type="text" name="name" placeholder="Nome completo" aria-label="First name" required />
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="email" name="email" placeholder="Email" aria-label="Email address" required />
            <input type="password" name="pwd" placeholder="Senha" required>
            <button type="submit" name="submit">Enviar</button>
        </form>
    </section>
</body>

</html>