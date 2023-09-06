<?php 
    setcookie('nome', 'Dudu Tieepo', time()+3600)
?>

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
            Olá usuário secreto!
        </h1>

        <a href="nome.php">
            <button class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-2 mb-2">Clique nesse botão misterioso e veja o que acontece</button>
        </a>
    </div>

</body>

</html>