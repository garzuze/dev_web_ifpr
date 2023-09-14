<?php 
session_start();
include('secure.php');
secure_page();
if (isset($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja bem vindo!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="mx-0 my-4 text-center">
        <h1 class="text-3xl font-bold">Seja bem vindo!</h1>
        <p>Só de boa?</p>
        <form method="post"><input type="submit" name="logout" value="logout"></form>
    </section>
</body>

</html>