<?php
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
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        expel_user();
    }
}

secure_page();

function verify_user($email, $password){
    session_start();
    $sql = connect();
    echo $email + $password;
    // Primeiro, verificamos se o e-mail existe.
    $query = $sql->prepare("SELECT * FROM bdfuncionarios.tbusers WHERE email = ?");
    $query->bind_param('s', $email);
    $query->execute();
    $result_query = $query->get_result();

    if ($result_query->num_rows === 1) {
        // Agora, comparamos a senha inserida com a senha no banco de dados
        $row = $result_query->fetch_assoc();
        $stored_password = $row['password'];

        if (password_verify($password, $stored_password)){
            // As senhas coincidem, o usuário é logado
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: index.php');
        } else {
            // As senhas não coincidem, o usuário não é logado
            // echo "<script> alert('Senha incorreta!); </script>";
            expel_user();
        }

        
    } else {
        // Usuário não encontrado no banco de dados
        // echo "<script> alert('Usuário não encontrado! Redirecionando para cadastro.); </script>";
        header('Location: signup.php');
        expel_user();
    }
}

function expel_user(){
    session_start();
    session_destroy();
    header('Location: login.php');
}

?>