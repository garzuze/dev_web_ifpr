<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="get">
            <label for="latao" class="text-l">Digite a a quantidade de latão (em gm):</label>
            
            <!-- Esse "value" no input é para, mesmo depois que o usuário enviar o form, o valor que ele digitou permanecer ali -->
            <input type="number" step="any" name="latao"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required
            value="<?php if(isset($_GET['latao'])){echo $_GET['latao'];} ?>">

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_GET['submit'] ?? false)) {
            $latao = $_GET['latao'];

            echo "<p class='mt-6'>Quantidade de  cobre: <strong>" . $latao * 0.70 . "</strong></p>";
            echo "<p class='mt-6'>Quantidade de  zinco: <strong>" . $latao * 0.30 . "</strong></p>";
        }
        ?>
    </div>
</body>

</html>