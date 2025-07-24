<?php
require_once __DIR__.'/config.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$email]) && $users[$email]['password'] === $password) {
    $_SESSION['user'] = $email;
    $_SESSION['role'] = $users[$email]['role'];
    if ($_SESSION['role'] === 'agent') {
        header('Location: agent.php');
    } else {
        header('Location: index.php');
    }
    exit;
}

$_SESSION['error'] = 'Identifiants invalides';
header('Location: login.php');
exit;
?>
