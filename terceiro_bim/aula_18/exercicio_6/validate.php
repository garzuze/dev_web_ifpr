<?php
include('secure.php');
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    verify_user($email, $hashed_password);
}

?>