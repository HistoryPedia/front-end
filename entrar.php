<?php
session_start();

$_SESSION['logged'] = $_SESSION['logged'] ?? False;

$email_db = 'carlos@gmail.com';
$senha_db = 'carlos123';

$p_email = $_POST['email'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_email == $email_db && $p_senha == $senha_db){
    $_SESSION['email'] = $email_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = True;
    header('location: perfil.php');
}
?>