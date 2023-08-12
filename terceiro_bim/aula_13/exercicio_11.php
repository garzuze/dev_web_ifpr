<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
    <?php
        $pulgas = 2;
        $antipulgas = 1;

        for ($dias=1; $pulgas >= 0; $dias++){
            echo "<h3>dia $dias</h3>";
            $pulgas += (int)($pulgas / 2) * 6;
            echo "pulgas depois de se reproduzirem: $pulgas <br>";
            if ($dias % 3 == 0 && $dias != 0){
                $pulgas -= 2;
                echo "pulgas após 3 dias: $pulgas <br>";
            }
            $pulgas -= $antipulgas;
            echo "pulgas depois do anti-pulgas: $pulgas <br>";

            $antipulgas *= 4;
        }
        echo "<h3>PHP estará livre de pulgas em " . $dias - 1 ." dias</p>";
        // dias - 1 porque o for itera os dias + uma
    ?>
    <h4>Segue foto do meu cachorro abaixo, o nome dele é Python (peludo, ynteligente, tico-tico, hermoso, ontológico, nacionalista)</h4>
    <img src="https://lh3.googleusercontent.com/pw/AIL4fc_Zsd_D7EKHYKiGZ1wrRLf3gyHKsOn47lxukizAkHi4etOUOdlP4nSzjdpr0398G9GNRUI63WABViTt0wOlmkR3Hn90BgXZIVaDvo4co_7vxPdA-OXX_u7fGeZHWJ_0Nyujenpqu9QjqDExUfctbD7PEg=w988-h741-s-no">
    </div>
</body>
</html>