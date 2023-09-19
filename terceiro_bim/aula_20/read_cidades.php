<?php
require_once("config.php");

if (ISSET($_POST['estado'])) {
	$estado = $_POST['estado'];
} else {
	$estado = 'PR';
}

try {
	$consulta = $mysqli->prepare("SELECT id, cidade FROM cidades WHERE estado = ? ORDER by cidade;");
	$consulta->bind_param("s", $estado);
	$consulta->execute();

	$resultado = $consulta->get_result();
	$resultadoFormatado = $resultado->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
	error_log($e->getMessage());
	print_r($mysqli->error);
	exit('Alguma coisa estranha aconteceu...');
}

echo json_encode($resultadoFormatado);

$consulta->close();
$mysqli->close();
?>