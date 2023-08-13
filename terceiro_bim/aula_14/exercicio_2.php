<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="get">
            <label for="nome" class="text-l">Digite seu nome:</label>
            <input type="text" name="nome" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required>

            <label for="idade" class="text-l">Digite sua idade:</label>
            <input type="number" name="idade" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required>

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_GET['submit'] ?? false)) {
            $nome = $_GET['nome'];
            $idade = $_GET['idade'];
            echo "
                        <p>Seja bem-vindo, <strong>$nome!</strong></p>
                        <p>Todo mundo com esse link sabe a sua idade! Olha que legal ela aqui ó: <strong>$idade anos</strong></p>
                    ";
        }
        ?>
    </div>
</body>

</html>