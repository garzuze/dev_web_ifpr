<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-center">
    <div class="mt-6">
        <h1 class="text-3xl font-bold">
            <?php echo "Olá, " . $_COOKIE['nome'] . "!";?>
        </h1>
    </div>

</body>

</html>