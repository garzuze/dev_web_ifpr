<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
        <form action="" method="get">

            <blockquote class="p-4 my-4 border-l-4 border-gray-300 bg-gray-50">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900">
                    "É possível organizar os selos em um retângulo com mais que uma linha e mais que uma coluna?"<br>
                </p>
                <p class="text-l">(A.K.A descobrir se o número é primo)</p>
            </blockquote>

                <label for="selos" class="text-l">Digite a a quantidade de selos:</label>
            
            <!-- Esse "value" no input é para, mesmo depois que o usuário enviar o form, o valor que ele digitou permanecer ali -->
            <input type="number" step="any" name="selos"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required 
            value="<?php if(isset($_GET['selos'])) echo $_GET['selos'];?>">

            <input type="submit" name="submit" value="Enviar" class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
            if ('Enviar' === ($_GET['submit'] ?? false)) {
                $selos = $_GET['selos'];
                $num_primo = false;

                if ($selos >= 4){
                    for ($i=2; $i<$selos; $i++){
                        if ($selos % $i != 0){
                            $num_primo = true;
                        } else {
                            $num_primo = false;
                            break; //lol
                        }
                    }

                    if($num_primo){
                        echo "<p class='mt-6'>Não! Não é possível :(</p>";
                    } else {
                        echo "<p class='mt-6'>Sim! É possível!</p>";
                    }
                } else {
                    echo "<p class='mt-6'>Tem que ser maior ou igual a quatro!</p>";
                }
            }
        ?>
    </div>
</body>

</html>