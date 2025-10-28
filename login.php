<?php
include("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location: index.html");
  exit();
} else {
  echo "<script>alert('Login inválido!'); window.location.href='login.html';</script>";
}
?><?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['usuario'] = $email;
  header("Location: index.php");
  exit();
} else {
  echo "<script>alert('Login inválido!'); window.location.href='login.html';</script>";
}
?>