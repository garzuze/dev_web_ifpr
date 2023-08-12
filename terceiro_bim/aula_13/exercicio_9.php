<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco 9</title>
</head>
<body>
    <?php 
        for($i=1; $i<=10; $i++) {
            echo "
            <table border='2px solid' style='border-collapse: collapse;'>
                <tr>
                    <th>Tabuada do $i</th>
                </tr>";
            for($x=1; $x<=10; $x++){
                echo "
                    <tr>
                        <td>". $i * $x . "</td>
                    </tr>
                ";
            }
            echo "</table>";
        }
    ?>    
</body>
</html>