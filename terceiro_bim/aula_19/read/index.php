<?php 
include('../connect.php');

$sql = connect();
$query = $sql->prepare("SELECT * FROM tbalunoslegais");
$query->execute();

$query_json = json_encode($query->get_result()->fetch_all(MYSQLI_ASSOC));

var_dump($query_json);
?>