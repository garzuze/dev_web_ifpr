<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="header lg:flex">
        <div class="apresentacao w-full lg:w-1/2 mx-auto p-12">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Instantes Frios de Prazer Refrescante (IFPR)
                </span>
            </h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Aqui nós fazemos seus instantes mais frios, mais prazerosos, e, obviamente, mais refrescantes.<br>
                (Professor esse site é responsivo, testa aí)
            </p>
        </div>
        <div class="w-full lg:w-1/2 mx-auto text-center m-12">
            <form method="post" action="">
            <?php
                if ('Pagar' === ($_POST['pagar'] ?? false)){
                    $valor_pago = $_POST['valor_pago'];
                    $valor_total = $_POST['valor_total'];
                    $troco = $valor_pago - $valor_total;

                    if ($valor_pago > $valor_total) {
                        echo "<h1 class='text-2xl font-bold'>To aqui teu troco meu filho: R$$troco</h1>";
                    } else {
                        echo "<h1 class='text-2xl font-bold'>Tá me tirando? Isso é menor do que o total.</h1>";
                        echo "<h1 class='text-2xl font-bold'>Você tem que pagar R$$valor_total!</h1>";
                        echo "<input type='hidden' value='$valor_total' name='valor_total'>";
                        echo "<input type='number' name='valor_pago' step='1'
                        class='my-4 p-2 bg-gray-200 border-0 rounded-xl' 
                        placeholder='Digite o valor pago'>";
                        echo "<input type='submit' name='pagar' value='Pagar' 
                        class='bg-sky-200 p-2 rounded-xl hover:shadow-xl'>";
                    }
                } else {
                    $valor_agua = (int)$_POST['quant_agua'] * 3;
                    $valor_cha = (int)$_POST['quant_cha'] * 5;
                    $valor_soda = (int)$_POST['quant_soda'] * 10;

                    $valor_total = $valor_agua + $valor_cha + $valor_soda;

                    echo "<h1 class='text-3xl font-bold md:text-5xl lg:text-6xl'>Vai ficar R$$valor_total!</h1>";
                    echo "<input type='hidden' value='$valor_total' name='valor_total'>";
                    echo "<input type='number' name='valor_pago' step='1'
                    class='my-4 p-2 bg-gray-200 border-0 rounded-xl' 
                    placeholder='Digite o valor pago'>";
                    echo "<input type='submit' name='pagar' value='Pagar' 
                    class='bg-sky-200 p-2 rounded-xl hover:shadow-xl'>";
                }
            ?>
        </form>
        </div>
    </div>

</body>

</html>