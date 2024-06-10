<?php
session_start();

// Verifica se a sessão está configurada
if (!isset($_SESSION['username'])) {
    // Se o usuário não estiver autenticado, redirecione para a página de login
    header("Location: index.html");
    exit();
}
?>
