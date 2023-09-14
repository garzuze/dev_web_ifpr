<?php 
include('../connect.php');
if (isset($_GET['nome'])) {$nome = $_GET['nome'];}

$sql = connect();
$query = $sql->prepare("SELECT * FROM tbalunoslegais WHERE (nome = ?)");
$query->bind_param("s", $nome);
$query->execute();

$query_json = json_encode($query->get_result()->fetch_all(MYSQLI_ASSOC));

var_dump($query_json);

?>