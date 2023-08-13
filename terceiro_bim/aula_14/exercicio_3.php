<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="get">
            <label for="peso" class="text-l">Digite seu peso (kg):</label>
            
            <!-- Esse "value" no input é para, mesmo depois que o usuário enviar o form, o valor que ele digitou permanecer ali -->
            <input type="number" step="any" name="peso"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required
            value="<?php if(isset($_GET['peso'])){echo $_GET['peso'];} ?>">

            <br>

            <label for="altura" class="text-l">Digite sua altura (m):</label>
            <input type="number" step="any" name="altura"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required
            value="<?php if(isset($_GET['altura'])){echo $_GET['altura'];} ?>">

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_GET['submit'] ?? false)) {
            $peso = $_GET['peso'];
            $altura = $_GET['altura'];
            $imc = round($peso / ($altura * $altura), 2);

            echo "<p class='mt-6'> Seu IMC é: $imc </p>";

            if ($imc <= 18.5) {
                echo "<p>Você está abaixo do peso.</p>";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                echo "<p>Você está no peso ideal.</p>";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                echo "<p>Você está levemente acima do peso.</p>";
            } elseif ($imc >= 30 && $imc <= 34.9) {
                echo "<p>Você está com Obesidade grau I.</p>";
            } elseif ($imc >= 35 && $imc <= 39.9) {
                echo "<p>Você está com Obesidade grau II.</p>";
            } else {
                echo "<p>Você está com Obesidade grau III.</p>";
            }
        }
        ?>
    </div>
</body>

</html>