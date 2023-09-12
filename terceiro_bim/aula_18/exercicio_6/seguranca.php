<?php
// =========== Configuração ==============
$_DB['server'] = 'localhost'; // Servidor MySQL
$_DB['user'] = 'root'; // Usuário MySQL
$_DB['password'] = 'SeNh@!777'; // Senha MySQL
$_DB['database'] = 'bdFuncionarios'; // Banco de dados MySQL
// =======================================
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Desativa relatórios de erros
try {
    $mysqli = new mysqli($_DB['server'], $_DB['user'], $_DB['password'], $_DB['database']);
    $mysqli->set_charset("utf8mb4");
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Alguma coisa estranha aconteceu...');
}

$consulta = $mysqli->prepare("SELECT * FROM bdfuncionarios.tbusers;");
$consulta->execute();
$resultado = $consulta->get_result();
$resultado_array = $resultado->fetch_all(MYSQLI_ASSOC);

print_r($resultado_array);

function verificaUser($email){
    
}
?>