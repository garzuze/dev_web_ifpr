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
            <label for="grana" class="text-l">Digite a a quantidade de grana:</label>
            
            <!-- Esse "value" no input é para, mesmo depois que o usuário enviar o form, o valor que ele digitou permanecer ali -->
            <input type="number" step="any" name="grana"
            class="mt-4 p-2 bg-gray-100 border-0 rounded-xl" required
            value="<?php if(isset($_GET['grana'])) echo $_GET['grana'];?>">

            <input type="submit" name="submit" value="Enviar"
            class="w-full bg-blue-100 rounded-xl p-4 mt-4 hover:shadow-xl">
        </form>
        <?php
        if ('Enviar' === ($_GET['submit'] ?? false)) {
            $grana = $_GET['grana'];
            $notas = [200, 100, 50, 20, 10, 5, 2, 1];
            $notas_utilizadas = [];
            $cont_notas = 0;

            foreach ($notas as $nota) {
                if ($grana < $nota) {
                    continue;
                }
                $cont_nota = 1;
                do {
                    $grana -= $nota;
                    $notas_utilizadas[$nota] = $cont_nota++;
                    $cont_notas++;
                } while ($grana >= $nota);
                
            }
            
            if($cont_notas!=1) {
                echo "<p class='mt-6'>Serão necessárias, no mínimo, <strong>" . $cont_notas . "</strong> notas</p>";
            } else {
                echo "<p class='mt-6'>Será necessária, no mínimo, <strong>" . $cont_notas . "</strong> nota</p>";
            }
            
            echo "<p class='mt-6'><strong>Notas utilizadas:</strong> <br>";
            foreach ($notas_utilizadas as $key => $value) {
                if ($value != 1) {
                    echo "$value notas de $key  <br>";
                } else {
                    echo "$value nota de $key  <br>";
                }
            }
        }
        ?>
    </div>
</body>

</html>