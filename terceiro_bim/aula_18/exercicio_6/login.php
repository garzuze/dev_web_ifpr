<?php
session_start();
include('secure.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="mx-0 my-4 text-center">
        <h1 class="text-3xl font-bold">Login</h1>
        <div class="max-w-sm mt-6 p-6 mx-auto text-left rounded-lg shadow-xl">
            <form action="validate.php" method="post">
                <label class="text-l">Digite seu e-mail:</label><br>    
                <input type="email" name="email" class="my-4 p-2 bg-gray-100 border-0 rounded-xl w-full" required><br>
                <label class="text-l">Digite sua senha:</label><br>    
                <input type="password" name="password" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl w-full" required>
                <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
            </form>
        <div class="text-center mt-6">
            <h2 class="text-xl font-bold">Novo por aqui?</h2>
            <a href="signup.php">Cadastrar-se</a>
        </div>
    </section>
</body>

</html>