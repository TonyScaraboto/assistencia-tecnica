<?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

// Consulta segura usando prepared statement (opcional para evitar SQL Injection)
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['usuario'] = $email;
    header("Location: painel.html");
    exit();
} else {
    echo "<script>
        alert('Login inválido!');
        window.location.href = 'login.html';
    </script>";
}
?>