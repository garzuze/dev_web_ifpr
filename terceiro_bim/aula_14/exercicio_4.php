<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="get">
            <label for="temp_celsius" class="text-l">Digite a temperatura em graus celsius:</label>
            
            <!-- Esse "value" no input é para, mesmo depois que o usuário enviar o form, o valor que ele digitou permanecer ali -->
            <input type="number" step="any" name="temp_celsius"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required
            value="<?php if(isset($_GET['temp_celsius'])){echo $_GET['temp_celsius'];} ?>">

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_GET['submit'] ?? false)) {
            $temp_celsius = $_GET['temp_celsius'];
            $temp_fh = ($temp_celsius * 1.8) + 32;

            echo "<p class='mt-6'>Essa temperatura em fahrenheit é igual a: $temp_fh</p>";
        }
        ?>
    </div>
</body>

</html>