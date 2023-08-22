<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <?php
    function saudacao($hora){
        if ($hora > 6 && $hora < 12){
            echo "BOM DIA MEU CONSAGRADO";
        } elseif ($hora > 12 && $hora < 18){
            echo "BOA TARDE MEU CONSAGRADO";
        } elseif ($hora > 18 && $hora < 23){
            echo "BOA NOITE MEU CONSAGRADO";
        } else {
            echo "vai dormir mano";
        }
    }
    ?>
    <h1>QUE HORA ES???????????????????????????????????</h1>
    <?php 
    date_default_timezone_set('America/Sao_Paulo');
    $horario_atual = date('H:i:s');
    echo "hora atual: $horario_atual <br>";
    $hora = (int)date('H');
    echo saudacao($hora);
    ?>
    <br>
    <img src="https://media.tenor.com/qRInknCdZa8AAAAd/boatardeconsagrado.gif">
</body>
</html>