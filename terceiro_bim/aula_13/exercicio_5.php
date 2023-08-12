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
        <form action="" method="post">
            <h1 class="text-2xl">Digite o número aqui:</h1>
            <input type="number" name="number" class="mt-4 p-2 bg-gray-100 border-0 rounded-xl">
            <button>Enviar</button>
        </form>
        <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $number = $_POST['number'];

                    if ($number != null) { //verifica se o usuário não digitou nada e enviou o form
                        if ($number % 2 === 0){
                            echo("<p>O número é par!</p>");
                        } else {
                            echo("<p>O número é impar!</p>");
                        }
                    }
                }
            ?>
    </div>

    
</body>
</html>