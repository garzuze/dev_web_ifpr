<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="post">
            <label for="nome" class="text-l">Digite seu nome:</label>
            <input type="text" name="nome" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required>

            <label for="senha" class="text-l">Digite sua senha:</label>
            <input type="password" name="senha" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required>

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_POST['submit'] ?? false)) {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            echo "
                        <p>Seja bem-vindo, <strong>$nome!</strong></p>
                        <p>Vou printar sua senha aqui só pra mostrar que eu sei ela! Olha que legal ela aqui ó: <strong>$senha</strong></p>
                    ";
        }
        ?>
    </div>
</body>

</html>