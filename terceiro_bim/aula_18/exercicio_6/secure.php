<?php
session_start();
function connect()
{
    // =========== Configuração ==============
    $_DB['server'] = 'localhost'; // Servidor MySQL
    $_DB['user'] = 'root'; // Usuário MySQL
    $_DB['password'] = 'SeNh@!777'; // senha MySQL
    $_DB['database'] = 'bdFuncionarios'; // Banco de dados MySQL
    // =======================================

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Desativa relatórios de erros
    try {
        $sql = new mysqli($_DB['server'], $_DB['user'], $_DB['password'], $_DB['database']);
        $sql->set_charset("utf8mb4");
        return $sql;
    } catch (Exception $e) {
        error_log($e->getMessage());
        exit('Alguma coisa estranha aconteceu...');
    }
}

function secure_page(){
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        expel_user();
    }
}

secure_page();

function verify_user($email, $password){
    $sql = connect();
    $query = $sql->prepare("SELECT * FROM bdfuncionarios.tbusers WHERE email = '$email' AND password = '$password';");
    $query->execute();
    $result_query = $query->get_result()->fetch_all(MYSQLI_ASSOC);
    if (count($result_query) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: index.php');
    } else {
        expel_user();
    }
}

function expel_user(){
    session_start();
    session_destroy();
    header('Location: login.php');
}

?>