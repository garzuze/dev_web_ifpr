<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input name="nome" type="text" required>

        <label for="email">Email:</label>
        <input name="email" type="email" required>

        <label for="data_nasc">Data de nascimento:</label>
        <input name="data_nasc" type="date" required>

        <label for="senha">Senha:</label>
        <input name="senha" type="password" required>

        <input type="submit" name="submit" value="Enviar">

    </form>
    
    <?php
        if (('Enviar' === ($_POST['submit'] ?? false))) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $data_nasc = $_POST['data_nasc'];
            $senha = $_POST['senha'];
            
            echo "INSERT INTO tbUser (userName, userMail, userDateBirth, userPwd)
            VALUES ('$nome', '$email', '$data_nasc', '$senha');";
        }
    ?>
</body>
</html>