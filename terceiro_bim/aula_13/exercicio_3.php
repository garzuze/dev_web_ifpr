<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
        $var1 = 777;
        $var2 = 69;
    ?>

    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <h1 class="text-2xl">Valores iniciais </h1>
        <p>Variável 1: <?php echo($var1);?> </p>
        <p>Variável 2: <?php echo($var2);?> </p>
    </div>

    <?php
        $var_temp = $var1;
        $var1 = $var2;
        $var2 = $var_temp;
    ?>

    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <h1 class="text-2xl">Alterando...</h1>
        <p>Variável 1: <?php echo($var1);?> </p>
        <p>Variável 2: <?php echo($var2);?> </p>
    </div>
</body>
</html>