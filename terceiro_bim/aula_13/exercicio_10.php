<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <?php 
        for($i=1;$i<=100000;$i++){
            // echo "$i <br>";
        }

        echo "acabou!!";
    ?>

    <p>Tempo de carregamento normal: 9s e 37 milésimos</p>
    <p>Tempo de carregamento sem printar nada: instantâneo, não dá para contar</p>
    <p>Discutindo com meus colegas, concluímos que isso ocorre pois, quando o for está vazio, não há nada para carregar. Não tem nada para printar na tela e também não é necessário carregar a barra de scrol. Por isso a página carrega muito mais rápido</p>
</body>
</html>