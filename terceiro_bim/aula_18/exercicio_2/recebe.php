<?php 
$lingua = $_GET['lingua'];
setcookie('lingua', $lingua, time() + 3600);

if ($lingua == 'ingles') {
    header('Location: ingles.php');
} elseif ($lingua == 'frances') {
    header('Location: frances.php');
} elseif ($lingua == 'espanhol') {
    header('Location: espanhol.php');
} elseif ($lingua == 'portuges') {
    header('Location: index.php');
}


?>