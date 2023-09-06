<?php
if (isset($_GET['submit'])) {
    setcookie('lingua', $_GET['lingua'], time() + 26);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site multilínguas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-3xl font-bold">
        Seja bem-vindo!
    </h1>
    <p>Você pode selecionar sua língua preferida abaixo:</p>
    <form method="get" action="recebe.php">
        <select name="lingua">
            <option value="ingles">Inglês</option>
            <option value="frances">Francês</option>
            <option value="espanhol">Espanhol</option>
            <option value="portuges">Português</option>
        </select>
        <input class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-2 mb-2" type="submit" value="submit">
    </form>
    <p>Recarregue a página para ver as mudanças!</p>
</body>

</html>