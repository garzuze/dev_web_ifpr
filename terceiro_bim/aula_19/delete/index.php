<?php 
include('../connect.php');
if (isset($_GET['nome'])) {$nome = $_GET['nome'];}

$sql = connect();
$query = $sql->prepare("DELETE FROM tbalunoslegais WHERE (nome = ?)");
$query->bind_param("s", $nome);
$query->execute();
?>