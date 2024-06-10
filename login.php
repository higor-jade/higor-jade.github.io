<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strtolower($_POST['username']); // Converter para minúsculas
    $password = $_POST['password'];

    // Usuários fixos e suas senhas correspondentes
    $fixed_users = array(
        "jade" => "070224",
        "higor" => "070224"
    );

    // Verificar se o nome de usuário fornecido está presente nos usuários fixos
    if (array_key_exists($username, $fixed_users) && $password === $fixed_users[$username]) {
        // Credenciais corretas, iniciar sessão
        $_SESSION['username'] = $username;
        header("Location: page.php"); // Redirecionar para a página desejada
        exit();
    } else {
        // Armazenar mensagem de erro na sessão
        $_SESSION['error'] = "Usuário ou senha inválidos.";
        header("Location: index.php"); // Redirecionar de volta para a página de login
        exit();
    }
} else {
    // Se o método de requisição não for POST, redirecionar para a página de login
    header("Location: index.php");
    exit();
}
?>
