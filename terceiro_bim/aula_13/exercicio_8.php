<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco 8</title>
</head>

<body>
    <table border="1px solid" style="border-collapse: collapse;">
        <tr>
            <th><strong>x</strong</th>
            <th><strong>x<sup>2</sup></strong></th>
        </tr>
        <?php 
            for($i=1; $i <= 30; $i++) {
                echo "
                <tr>
                    <td>". $i . "</td>
                    <td>". $i * $i ."</td>
                <tr>";
            }
        ?>
    </table>
</body>
</html>