<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>

<body>

    <form method="GET">
        <label>Nome</label>
        <input type="text" name="nome" required><br>
        <label>Email</label>
        <input type="email" name="email" required onfocusout="<?php ?>"><br>
        <label>Telefone</label>
        <input type="text" name="telefone" required placeholder="(DDD) xxxxx-xxxx"><br>
        <label>Senha</label>
        <input type="Password" name="senha" required><br>
        <input type="submit" name="submit"><br>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $nome = $_GET['nome'];
        $email = strtolower($_GET['email']);
        $telefone = $_GET['telefone'];
        $senha = $_GET['senha'];

        // Nome tem mais que 45 letras
        if (strlen($nome) > 45) {
            echo "<script>alert('nome mto grande meu mano, ajeita isso dai')</script>";
        }

        // Nome precisa ter espaços
        if (!preg_match('/\s/', $nome)) {
            echo "<script>alert('são permitidos apenas letras e números no nome de usuário.')</script>";
        }

        $telefone = preg_replace("/[^0-9]/", "", $telefone); // Substitui tudo que não é numero por uma string vazia
        $telefone = "+55$telefone";
        echo ("Número formatado: " . $telefone);
    }
    ?>
</body>

</html>