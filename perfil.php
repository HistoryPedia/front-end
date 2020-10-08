<?php
session_start();
$logged = $_SESSION['logged'] ?? NULL;

if (!$logged) die('Login não realizado');
?>
<p> Olá </p>
