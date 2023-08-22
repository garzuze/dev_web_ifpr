<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php 
    function imagenAleatoria($imagens){
        $index = rand(0, sizeof($imagens) - 1);
        $img_src = "images/" . $imagens[$index];
        return $img_src;
    }
    ?>

    <h1>Imagens aleatorias!!!</h1>
    <p>aperte f5 para mudar</p>
    
    <?php 
    $imagens = ['snoopy.jpg', 'charlie_brown.jpg', 'lucy.jpg', 'franklin.jpg', 
    'pimentinha.jpg', 'woodstock.jpg', 'linus.jpg', 'schroeder.jpg',];
    $src = imagenAleatoria($imagens);
    echo "<img src='$src' width='96px'>";
    ?>
</body>
</html>