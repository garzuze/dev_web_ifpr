<?php
session_start();
include('secure.php');
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    verify_user($email, $password);
}
?>