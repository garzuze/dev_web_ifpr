<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <?php 
        $a = 4.10;
        $b = 3.90;
    ?>
    <div class="max-w-sm mt-6 p-6 mx-auto text-center rounded-lg shadow-xl">
            <p><?php echo($a + $b);?></p>
            <p><?php echo((Int)$a + $b);?></p>
            <p><?php echo($a + (Int)$b);?></p>
            <p><?php echo((Int)$a + (Int)$b);?></p>
    </div>
</body>
</html>