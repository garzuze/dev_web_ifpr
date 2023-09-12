<?php
include('seguranca.php');
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    verify_user($email, $password);
}

?>