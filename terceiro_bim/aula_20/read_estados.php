<?php
require_once("config.php");

try {
	$consulta = $mysqli->prepare("SELECT * FROM estados ORDER BY estado;");
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