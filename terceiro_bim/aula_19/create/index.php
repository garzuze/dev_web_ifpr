<?php 
include('../connect.php');
if (isset($_GET['nome'])) {$nome = $_GET['nome'];}
if (isset($_GET['avaliacao'])) {$avaliacao = $_GET['avaliacao'];}

$sql = connect();
$query = $sql->prepare("INSERT INTO tbalunoslegais (nome, avaliacao) VALUES (?, ?)");
$query->bind_param("ss", $nome, $avaliacao);
$query->execute();
?>