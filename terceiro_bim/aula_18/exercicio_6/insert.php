<?php
include('secure.php');
// Preparando variáveis para inserção no BD
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Conectando ao BD e inserindo novos dados
$sql = connect();
$query = $sql->prepare("INSERT INTO tbusers (email, password) VALUES (?, ?)");
$query->bind_param("ss", $email, $hashed_password);
$query->execute();

?>
