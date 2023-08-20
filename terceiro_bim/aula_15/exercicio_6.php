<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>
    <?php
    $guerreiros = [
        ['goku', 924, 10000],
        ['kuririn', 206, 1750],
        ['piccolo', 408, 3500],
        ['gohan', 101, 981],
        ['tenshinhan', 250, 1830],
        ['chaos', 145, 610],
        ['yamcha', 177, 1480],
        ['yajirobe', 4, 4]
    ];
    $maior_aumento = 0;
    $guerreiro_com_maior_aumento = "";
    $menor_ki = 10000;
    $fracote = "";
    $soma_total = 0;

    foreach ($guerreiros as &$guerreiro) {
        $ki_inicial = $guerreiro[1];
        $ki_final = $guerreiro[2];
        $soma_total += $ki_final;

        if (($ki_final - $ki_inicial) == 0) {
            $aumento = 0;
        } else {
            $aumento = round((($ki_final - $ki_inicial) / $ki_inicial) * 100, 2);
        }

        if ($aumento > $maior_aumento) {
            $maior_aumento = $aumento;
            $guerreiro_com_maior_aumento = $guerreiro[0];
        }

        if ($ki_final < $menor_ki) {
            $menor_ki = $ki_final;
            $fracote = $guerreiro[0];
        }

        $guerreiro[3] = $aumento;
    }
    unset($guerreiro); // desativa a variável guerreiro para não dar b.o depois

    echo "O guerreiro com maior percentual de aumento de ki: " . ucfirst($guerreiro_com_maior_aumento) . " ($maior_aumento) <br>";
    $media = $soma_total / sizeof($guerreiros);

    echo "Lutadores com ki acima da média: <br>";
    foreach ($guerreiros as &$guerreiro) {
        $ki_final = $guerreiro[2];
        if ($ki_final > $media) {
            echo "- " .  ucfirst($guerreiro[0]) . "<br>";
        }
    }
    echo "Lutador mais fracote: " . ucfirst($fracote) . " ($menor_ki)";

    ?>
</body>

</html>